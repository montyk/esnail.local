<?php
class Controller_Page extends Controller_Layout {

    public function action_index() {
        $this->template->content = View::factory('pages/index');
    }

    public function action_how() {
        $this->template->content = View::factory('pages/how');
    }

    public function action_plans() {
        $this->template->content = View::factory('pages/plans');
    }

    public function action_support() {
        $this->template->content = View::factory('pages/support');
    }

    public function action_box() {
        $this->template->content = View::factory('pages/box');
    }

    public function action_security() {
        $this->template->content = View::factory('pages/security');
    }

    public function action_about() {
        $this->template->content = View::factory('pages/about');
    }

    public function action_faq() {
        $this->template->content = View::factory('pages/faq');
    }

    public function action_legal() {
        $this->template->content = View::factory('pages/legal');
    }

    public function action_privacy() {
        $this->template->content = View::factory('pages/privacy');
    }

    public function action_register() {
        $this->template->content = View::factory('pages/register');
    }

    public function action_testimonials() {
        $this->template->content = View::factory('pages/testimonials');
    }

    public function action_blog() {
        $this->template->content = View::factory('pages/blog');
    }

}




