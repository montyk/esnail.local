<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Plan extends ORM
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
            'description' => array(
                array('not_empty'),
            ),
            'scans' => array(
                array('not_empty'),
            ),
            'monthFee' => array(
                array('not_empty'),
            ),
        );
    }

    public function create_plan($values, $expected)
    {
        return $this->values($values, $expected)->create();
    }

    public function update_plan($values, $expected = NULL)
    {
        return $this->values($values, $expected)->update();
    }
}