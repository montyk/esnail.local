<?php
    abstract class Controller_Client extends Controller_Template {
        public $title = 'eSnail.ca | client';
        public $template = 'client';

        public function before() {
            if ($this->request->param('extension') == 'ajax') {
                $this->template = 'ajax';
                parent::before();
            } else {
                parent::before();
                $this->template->title = $this->title;
                $this->template->header = View::factory('_partials/header');
                $this->template->footer = View::factory('_partials/footer');
                $this->template->action = $this->request->action();
            }
        }
    }