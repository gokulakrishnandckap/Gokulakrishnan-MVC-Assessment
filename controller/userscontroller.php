<?php

require_once 'model/usermodel.php';

class UserController
    {

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function view() 
    {

        require "view/create.php";

      

    }

    public function create() 
    {
        // var_dump($_POST);

        $this->userModel->create($_POST);

    }

    public function read() 
    {
       $user = $this->userModel->getAllUsers();

        require "view/views.php";
 
    }

    public function edit($id) {
       
       $singledata = $this->userModel->edit($id);

       require "view/edit.php";


    }

    public function delete($id) {

        $this->userModel->delete($id);
        

    }

    public function update($id) {

       $user = $this->userModel->update($id,$_POST,$_FILES);



    }


}
