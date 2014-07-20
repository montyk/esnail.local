<?php
class Controller_Client_Business extends Controller_Client {

    public function action_index() {
        $this->template->content = View::factory('client/business/index')
        ->bind('business', $business);
        $user = Auth::instance()->get_user();

        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $post = $this->request->post();
                $post['user_id'] = $user->id;

                $mail = ORM::factory('Business')->create_business(
                    $post,
                    array('name', 'user_id')
                );

            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
        }

        $business = $user->business;
    }

    public function action_delete()
    {
        $business = ORM::factory('Business', $this->request->param('id'));
        $business->delete();
        Controller::redirect('/client/business');
    }
}




