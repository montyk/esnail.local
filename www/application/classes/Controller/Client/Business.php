<?php
class Controller_Client_Business extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/business/index');
    }
}




