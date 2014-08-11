<?php

class Controller_Admin_File extends Controller_Admin
{

    public function action_upload()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                if ($_FILES['file']['tmp_name']) {
                    $filename = md5_file($_FILES['file']['tmp_name']) . '.pdf';
                    Upload::save($_FILES['file'], $filename, 'upload');
                    $post = $this->request->post();
                    $post['file'] = $filename;

                    ORM::factory('File')->create_file(
                        $post,
                        array('file', 'mail_id')
                    );
                }
            } catch (ORM_Validation_Exception $e) {
                $this->alert['message'] = 'There were errors, please see form below';
                $this->alert['errors'] = $e->errors('models');
            }
            Controller::redirect($_SERVER['HTTP_REFERER']);
        }


    }

    public function action_delete()
    {
        $file = ORM::factory('File', $this->request->param('id'));
        $file->delete();
        Controller::redirect($_SERVER['HTTP_REFERER']);
    }
}




