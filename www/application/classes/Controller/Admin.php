<?php
    abstract class Controller_Admin extends Controller_Template {
        public $title = 'eSnail.ca | admin';
        public $template = 'admin';

        public function before() {
            if (!Auth::instance()->logged_in('admin')) {
                Controller::redirect('/');
            }
            if ($this->request->param('extension') == 'ajax') {
                $this->template = 'ajax';
                parent::before();
            } else {
                parent::before();
                $controller = $this->request->controller();
                $this->template->title = $this->title;
                $this->template->alert = array();
                $this->template->footer = View::factory('_partials/admin/footer');
                $this->template->header = View::factory('_partials/admin/header')
                    ->bind('controller', $controller);

                $this->template->action = $this->request->action();
            }
        }
    }