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

        $user = Auth::instance()->get_user();
        $mail = ORM::factory('Mail', $this->request->param('id'));
        if ($mail->user->id == $user->id) $mail->trigger_hold();

        Controller::redirect('/client/mail');
    }

    public function action_archive()
    {
        $user = Auth::instance()->get_user();
        $mail = ORM::factory('Mail', $this->request->param('id'));
        if ($mail->user->id == $user->id) $mail->trigger_archive();

        Controller::redirect('/client/mail');
    }

    public function action_deliver()
    {
        $user = Auth::instance()->get_user();
        $mail = ORM::factory('Mail', $this->request->param('id'));
        if ($mail->user->id == $user->id) $mail->trigger_deliver();

        Controller::redirect('/client/mail');
    }

    public function action_view()
    {
        $this->template->content = View::factory('client/mail/view')
            ->bind('mail', $mail);

        $user = Auth::instance()->get_user();
        $mail = ORM::factory('Mail', $this->request->param('id'));
        if ($mail->user->id == $user->id) {
            $mail->trigger_viewed();
        } else {
            $mail = ORM::factory('Mail', 0);
        }
    }
}




