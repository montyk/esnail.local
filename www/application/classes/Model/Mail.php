<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends ORM
{

    protected $_has_many = array(
        'mails' => array(),
        'user_tokens' => array('model' => 'user_token'),
        'roles' => array('model' => 'role', 'through' => 'roles_users'),
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

    public function create_mail($values, $expected)
    {
        $extra_validation = Model_Mail::get_password_validation($values);
        return $this->values($values, $expected)->create($extra_validation);
    }

    public function update_mail($values, $expected = NULL)
    {
        if (empty($values['password'])) {
            unset($values['password'], $values['password_confirm']);
        }

        $extra_validation = Model_Mail::get_password_validation($values);
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