<?php
class Controller_Admin_Mail extends Controller_Admin {

    public function action_index() {
        $this->template->content = View::factory('admin/mail/index');
    }
}




