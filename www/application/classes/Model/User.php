<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends ORM
{

    protected $_has_many = array(
        'mails' => array(),
        'user_tokens' => array('model' => 'user_token'),
        'roles' => array('model' => 'role', 'through' => 'roles_users'),
    );

    protected $_has_one = array(
        'plan' => array(),
    );

    public function rules()
    {
        return array(
            'firstname' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
            ),
            'lastname' => array(
                array('not_empty'),
                array('max_length', array(':value', 32)),
            ),
            'password' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
                array(array($this, 'unique'), array('email', ':value')),
            ),
        );
    }

    public function filters()
    {
        return array(
            'password' => array(
                array(array(Auth::instance(), 'hash'))
            )
        );
    }

    public function complete_login()
    {
        if ($this->_loaded) {
            $this->logins = new Database_Expression('logins + 1');
            $this->last_login = time();
            $this->update();
        }
    }

    public function unique_key_exists($value, $field = NULL)
    {
        if ($field === NULL) {
            $field = $this->unique_key($value);
        }

        return (bool)DB::select(array('COUNT("*")', 'total_count'))
            ->from($this->_table_name)
            ->where($field, '=', $value)
            ->where($this->_primary_key, '!=', $this->pk())
            ->execute($this->_db)
            ->get('total_count');
    }

    public function unique_key($value)
    {
        return Valid::email($value) ? 'email' : 'email';
    }

    public static function get_password_validation($values)
    {
        return Validation::factory($values)
            ->rule('password', 'min_length', array(':value', 4))
            ->rule('email', 'min_length', array(':value', 4))
            ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'))
            ->rule('email_confirm', 'matches', array(':validation', ':field', 'email'));
    }

    public function create_user($values, $expected)
    {
        $extra_validation = Model_User::get_password_validation($values);
        return $this->values($values, $expected)->create($extra_validation);
    }

    public function update_user($values, $expected = NULL)
    {
        if (empty($values['password'])) {
            unset($values['password'], $values['password_confirm']);
        }


        $extra_validation = Model_User::get_password_validation($values);
        return $this->values($values, $expected)->update($extra_validation);
    }

    public function trigger_block()
    {
        return ($this->blocked) ? $this->set('blocked', 0)->update() : $this->set('blocked', 1)->update();
    }

    public function trigger_admin()
    {
        if ($this->roles->where('name', '=', 'admin')->find()->loaded()) {
            return $this->remove('roles', ORM::factory('role', array('name' => 'admin')));
        } else {
            return $this->add('roles', ORM::factory('role', array('name' => 'admin')));
        }
    }
}