<?php
class Controller_Client_Plan extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/plan/index');
    }
}




