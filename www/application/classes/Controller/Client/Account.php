<?php
class Controller_Client_Account extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/account/index')
            ->bind('user', $user);

        $user = Auth::instance()->get_user();
    }

    public function action_update()
    {
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();
                $post['username'] = $post['email'];

                $user->update_user(
                    $post,
                    array('firstname', 'lastname', 'email', 'password', 'promo', 'username')
                );
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
            Controller::redirect('/client/account');
        }
    }
}




