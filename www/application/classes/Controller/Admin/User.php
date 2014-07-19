<?php
class Controller_Admin_User extends Controller_Admin {

    public function action_index() {
        $this->template->content = View::factory('admin/user/index');
    }
}




