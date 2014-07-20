<?php
class Controller_Client_Account extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/account/index');
    }
}




