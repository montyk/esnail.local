<?php

class Controller_Admin_User extends Controller_Admin
{

    public function action_index()
    {
        $this->template->content = View::factory('admin/user/index')
            ->bind('users', $users);

        $users = ORM::factory('User')->find_all();
    }

    public function action_block()
    {
        ORM::factory('User', $this->request->param('id'))->trigger_block();
        Controller::redirect('/admin/user');
    }

    public function action_admin()
    {
        ORM::factory('User', $this->request->param('id'))->trigger_admin();
        Controller::redirect('/admin/user');
    }

    public function action_delete()
    {
        $user = ORM::factory('User', $this->request->param('id'));
        $user->delete();
        Controller::redirect('/admin/user');
    }

    public function action_edit()
    {
        $this->template->content = View::factory('admin/user/edit')
            ->bind('user', $user);

        $user = ORM::factory('User', $this->request->param('id'));
    }

    public function action_add()
    {
        $this->template->content = View::factory('admin/user/add');
    }

    public function action_create()
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
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->template->alert = $e->errors('models');
            }
        }
        Controller::redirect('/admin/user');
    }

    public function action_update()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();
                $post['username'] = $post['email'];

                $user = ORM::factory('user', $this->request->post('id'))->update_user(
                    $post,
                    array('firstname', 'lastname', 'email', 'password', 'promo', 'username')
                );
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->template->alert = $e->errors('models');
            }
        }
        Controller::redirect('/admin/user');
    }
}




