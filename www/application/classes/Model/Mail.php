<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mail extends ORM
{

    protected $_belongs_to = array(
        'user'     => array( )
    );

    protected $_has_many = array(
        'files' => array(),
    );

    public function rules()
    {
        return array(
            'from' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'to' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'subject' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'description' => array(
                array('not_empty'),
            ),
        );
    }

    public function create_mail($values, $expected)
    {
        return $this->values($values, $expected)->create();
    }

    public function update_mail($values, $expected = NULL)
    {
        return $this->values($values, $expected)->update();
    }


    public function trigger_admin()
    {
        if ($this->roles->where('name', '=', 'admin')->find()->loaded()) {
            return $this->remove('roles', ORM::factory('role', array('name' => 'admin')));
        } else {
            return $this->add('roles', ORM::factory('role', array('name' => 'admin')));
        }
    }


    public function trigger_hold()
    {
        return ($this->held) ? $this->set('held', 0)->update() : $this->set('held', 1)->update();
    }



    public function trigger_archive()
    {
        return ($this->archived) ? $this->set('archived', 0)->update() : $this->set('archived', 1)->update();
    }



    public function trigger_deliver()
    {
        return ($this->delivered) ? $this->set('delivered', 0)->update() : $this->set('delivered', 1)->update();
    }

}