<?php

class Controller_Auth extends Controller_Layout
{

    public function action_login()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
        }

        if (Auth::instance()->logged_in()) {
            Controller::redirect('client/mail');
        }

        $this->template->content = View::factory('auth/login');
    }

    public function action_register()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();
                $post['username'] = $post['email'];

                $user = ORM::factory('user')->create_user(
                    $post,
                    array('firstname', 'lastname', 'email', 'password', 'promo', 'username')
                );
                $user->add('roles', ORM::factory('role', array('name' => 'login')));

                Auth::instance()->login($post['username'], $post['password']);
                if (Auth::instance()->logged_in()) {
                    Controller::redirect('client/mail');
                }
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
        $this->template->content = View::factory('auth/register');
    }

    public function action_logout()
    {
        if (Auth::instance()->logout()) {
            Controller::redirect('/');
        }
    }
}