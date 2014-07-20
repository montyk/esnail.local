<?php
class Controller_Admin_Mail extends Controller_Admin {

    public function action_index() {
        $this->template->content = View::factory('admin/mail/index');
    }

    public function action_edit()
    {
        $this->template->content = View::factory('admin/mail/edit')
            ->bind('mail', $mail);

        $mail = ORM::factory('Mail', $this->request->param('id'));
    }

    public function action_new()
    {
        $this->template->content = View::factory('admin/mail/new');
    }

    public function action_view() {
        $this->template->content = View::factory('admin/mail/view');
    }

    public function action_create() {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();
                $post['held'] = 0;
                $post['archived'] = 0;
                $post['viewed'] = 0;
                $post['delivered'] = 0;

                $user = ORM::factory('user')->create_user(
                    $post,
                    array('subject', 'description', 'from', 'to', 'promo', 'username')
                );

                Controller::redirect('/admin/mail');
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
    }

    public function action_update() {
    }

    public function action_delete() {
        $mail = ORM::factory('Mail', $this->request->param('id'));
        $mail->delete();
        Controller::redirect('/admin/mail');
    }
}




