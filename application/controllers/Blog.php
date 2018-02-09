<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('blog_model');
  }


	public function index( $blog_ID )	{
      $data['blog'] = $this->blog_model->blog( $blog_ID );
      $this->load->template( 'detail_blog', $data );
	}

  public function post(){
    if(isset($this->session->uid)){

    $this->load->template('beranda');

  }
    else {
      redirect('user/login');
  }

  }


  public function submit()  {
     $this->blog_model->submit();

  $ext = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
  $file = "./asset/images/blog/".$this->session->blog_id.".".$ext;

  move_uploaded_file($_FILES['foto']['tmp_name'],$file);

redirect('home');
  }

 public function delete($blog_ID){
   $this->blog_model->delete($blog_ID);
   redirect('home');


 }

 public function edit($blog_ID){
   $data = $this->blog_model->blog($blog_ID);
   $this->load->template('editblog',$data);
 }

 public function subedit($blog_ID){
   $data = $this->blog_model->edit($blog_ID);
   redirect('home');
   // $this->load->template('editblog',$data);
 }







}
