<?php
    abstract class Controller_Layout extends Controller_Template {
        public $title = 'eSnail.ca';
        public $template = 'layout';

        public function before() {
            if ($this->request->param('extension') == 'ajax') {
                $this->template = 'ajax';
                parent::before();
            } else {
                parent::before();
                $this->template->title = $this->title;
                $this->template->alert = array();
                $this->template->header = View::factory('_partials/header');
                $this->template->footer = View::factory('_partials/footer');
                $this->template->action = $this->request->action();
            }
        }
    }