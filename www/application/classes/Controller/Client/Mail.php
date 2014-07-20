<?php

class Controller_Client_Mail extends Controller_Client
{

    public function action_index()
    {
        $this->template->content = View::factory('client/mail/index')
            ->bind('mails', $mails);

        $user = Auth::instance()->get_user();
        $mails = $user->mails->find_all();
    }

    public function action_hold()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_hold();
        Controller::redirect('/client/mail');
    }

    public function action_archive()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_archive();
        Controller::redirect('/client/mail');
    }

    public function action_deliver()
    {
        ORM::factory('Mail', $this->request->param('id'))->trigger_deliver();
        Controller::redirect('/client/mail');
    }

    public function action_view()
    {
        $this->template->content = View::factory('client/mail/view')
            ->bind('mail', $mail);

        $mail = ORM::factory('Mail', $this->request->param('id'));
    }
}




