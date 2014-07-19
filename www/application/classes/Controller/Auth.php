<?php
class Controller_Auth extends Controller_Layout {

    public function action_login() {
        if (HTTP_Request::POST == $this->request->method()) {
            Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
        }

        if(Auth::instance()->logged_in()) {
            Controller::redirect('client/mail');
        }

        $this->template->content = View::factory('auth/login');
    }

    public function action_register() {
        if (HTTP_Request::POST == $this->request->method()) {
            Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
        }
        $this->template->content = View::factory('auth/register');
    }

    public function action_logout() {
        if (Auth::instance()->logout()) {
            return $this->request->redirect('member/login');
        } else {
            echo 'fail logout';
        }
    }
}