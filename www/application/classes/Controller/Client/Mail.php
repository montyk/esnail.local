<?php
class Controller_Client_Mail extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/mail/index');
    }
}




