<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_File extends ORM
{

    protected $_belongs_to = array(
        'mail'     => array( )
    );

    public function rules()
    {
        return array(
            'file' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
        );
    }

    public function create_file($values, $expected)
    {
        return $this->values($values, $expected)->create();
    }

    public function update_file($values, $expected = NULL)
    {
        return $this->values($values, $expected)->update();
    }
}