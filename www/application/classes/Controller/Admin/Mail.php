<?php

class Controller_Admin_Mail extends Controller_Admin
{

    public function action_index()
    {
        $this->template->content = View::factory('admin/mail/index')
            ->bind('mails', $mails);

        $mails = ORM::factory('Mail')->find_all();
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

    public function action_view()
    {
        $this->template->content = View::factory('admin/mail/view')
            ->bind('mail', $mail);

        $mail = ORM::factory('Mail', $this->request->param('id'));
    }

    public function action_create()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();

                $mail = ORM::factory('Mail')->create_mail(
                    $post,
                    array('subject', 'description', 'from', 'to', 'kind', 'user_id')
                );

            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
        Controller::redirect('/admin/mail');
    }

    public function action_update()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();

                $mail = ORM::factory('Mail', $this->request->post('id'))->update_mail(
                    $post,
                    array('subject', 'description', 'from', 'to', 'kind', 'user_id')
                );

            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
        Controller::redirect('/admin/mail');
    }

    public function action_delete()
    {
        $mail = ORM::factory('Mail', $this->request->param('id'));
        $mail->delete();
        Controller::redirect('/admin/mail');
    }

    public function action_hold()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_hold();
        Controller::redirect('/admin/mail');
    }

    public function action_archive()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_archive();
        Controller::redirect('/admin/mail');
    }

    public function action_deliver()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_deliver();
        Controller::redirect('/admin/mail');
    }
}




