<?php
class Home extends Controller{
    public function __construct()
    {
        //gọi model User
        $this->UserModel = $this->model('User');
    }

    public function index(){
        //gọi method getuser
       $user  = $this->UserModel->getUser();

       //gọi và show dữ liệu ra view
       $this->view('Home',[
           'user' => $user
       ]);
    }


}
?>