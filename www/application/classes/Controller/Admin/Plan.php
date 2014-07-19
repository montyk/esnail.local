<?php
class Controller_Admin_Plan extends Controller_Admin {

    public function action_index() {
        $this->template->content = View::factory('admin/plan/index');
    }
}




