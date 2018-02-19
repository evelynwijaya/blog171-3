<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('Comment_model');
  }

  //
	// public function index($comment_ID)	{
  //     $data['comment'] = $this->comment_model->comments( $comment_ID );
  //     $this->load->template( 'detail_blog', $data );
	// }


  public function submit()  {
     $this->Comment_model->submit();
     redirect('/');
  }

}
