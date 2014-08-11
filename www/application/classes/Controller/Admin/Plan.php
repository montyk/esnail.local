<?php
class Controller_Admin_Plan extends Controller_Admin {

    public function action_index() {
        $this->template->content = View::factory('admin/plan/index')
        ->bind('plans', $plans);

        $plans = ORM::factory('Plan')->find_all();
    }

    public function action_new() {
        $this->template->content = View::factory('admin/plan/new');
    }

    public function action_edit()
    {
        $this->template->content = View::factory('admin/plan/edit')
            ->bind('plan', $plan);

        $plan = ORM::factory('Plan', $this->request->param('id'));
    }


    public function action_create()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();

                $mail = ORM::factory('Plan')->create_plan(
                    $post,
                    array('name', 'description', 'scans', 'monthFee', 'names', 'yearFee')
                );

            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
        Controller::redirect('/admin/plan');
    }


    public function action_update()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();

                $user = ORM::factory('Plan', $this->request->post('id'))->update_plan(
                    $post,
                    array('name', 'description', 'scans', 'monthFee', 'names', 'yearFee')
                );
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }
        Controller::redirect('/admin/plan');
    }

    public function action_delete()
    {
        $plan = ORM::factory('Plan', $this->request->param('id'));
        $plan->delete();
        Controller::redirect('/admin/plan');
    }
}




