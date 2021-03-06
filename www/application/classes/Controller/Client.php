<?php
    abstract class Controller_Client extends Controller_Template {
        public $title = 'eSnail.ca | client';
        public $template = 'client';

        public function before() {

            if (!Auth::instance()->logged_in()) {
                Controller::redirect('/');
            }
            if ($this->request->param('extension') == 'ajax') {
                $this->template = 'ajax';
                parent::before();
            } else {
                parent::before();
                $this->template->title = $this->title;
                $this->template->alert = array();
                $this->template->header = View::factory('_partials/client/header');
                $this->template->footer = View::factory('_partials/client/footer');
                $this->template->action = $this->request->action();
                $this->template->controller = $this->request->controller();
            }
        }
    }