<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Business extends ORM
{

    protected $_belongs_to = array(
        'user'     => array( )
    );

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
        );
    }

    public function create_business($values, $expected)
    {
        return $this->values($values, $expected)->create();
    }

}