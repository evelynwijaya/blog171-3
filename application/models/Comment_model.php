<?php

class Comment_model extends CI_Model {
   public function __construct() {
     parent::__construct();
   }


   // public function comment( $comment_ID ){
   //   $query = $this->db->query("SELECT
   //     users.nama,
   //     comment.comment,
   //     comment.tanggal
   //     FROM users
   //     INNER JOIN comment USING (user_ID)
   //     WHERE comment.user_ID ='".$user_ID."'");
   //     return $query->row_array();
   // }

    /**   * menyimpan comment blog baru   */
    public function submit(){
      // membuat commrnt_ID otomatis
      // menggunakan UNIX Timestamp --> date('U')
      $nick = substr( $this->input->post('comment'), 0 , 3 );
      // 3 huruf pertama dari judul blog
      $comment_id = "C-" . $nick . date('U');
      // menyiapkan data
      $data = [
                'comment_ID' => $comment_id,
                'comment' => $this->input->post('comment'),
                'nama' => $this->session->nama,
                'user_ID' => $this->session->uid,
                'blog_ID' => $this->input->post('blog_id'),
                'tanggal' => date('Y-m-d H:i:s')

              ];
      // simpan data ke dalam session
      $this->session->comment_id = $comment_id;
      // simpan ke database dalam tabel 'blogs'
      $this->db->insert( 'comment', $data );
    }








}
