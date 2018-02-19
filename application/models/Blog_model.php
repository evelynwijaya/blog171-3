<?php

class Blog_model extends CI_Model {
   public function __construct() {
     parent::__construct();
   }

   /**   * data satu blog berdasarkan blog_ID   */
    public function blog( $blog_ID ){
      $query = $this->db->query("SELECT
                                  user_ID,
                                  blog_ID,
                                  nama,
                                  judul,
                                  bahan,
                                  cara,
                                  foto
                                FROM blogs INNER JOIN users USING (user_ID)
                                WHERE blog_ID ='".$blog_ID."'");
        return $query->row_array();
    }

    /**   * menghasilkan daftar blog berdasarkan tanggal submit terbaru   */
    public function blogs(){
      $query = $this->db->query("SELECT * FROM blogs ORDER BY tanggal DESC");
      return $query->result_array();
    }

    public function comment( $blog_ID ){
      $query = $this->db->query("SELECT users.user_ID,blogs.blog_ID, comment.comment_ID, comment.comment,comment.nama,comment.tanggal
                                FROM users
                                INNER JOIN blogs USING (user_ID)
                                INNER JOIN comment ON (blogs.blog_ID=comment.blog_ID)
                                WHERE comment.blog_ID ='".$blog_ID."'
                                ORDER BY tanggal DESC");

        return $query->result_array();
    }


    /**   * menyimpan data blog baru   */
    public function submit(){
      // membuat blog_ID otomatis
      // menggunakan UNIX Timestamp --> date('U')
      $nick = substr( $this->input->post('judul'), 0 , 3 );
      // 3 huruf pertama dari judul blog
      $blog_id = "B-" . $nick . date('U');
      //ekstension gambar
      $ext = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
      // menyiapkan data
      $data = [
                'blog_ID' => $blog_id,
                'judul' => $this->input->post('judul'),
                'bahan' => $this->input->post('bahan'),
                'cara' => $this->input->post('cara'),
                'user_ID' => $this->session->uid,
                'tanggal' => date('Y-m-d H:i:s'),
                'foto' => $ext
              ];
      // simpan data ke dalam session
      $this->session->blog_id = $blog_id;
      // simpan ke database dalam tabel 'blogs'
      $this->db->insert( 'blogs', $data );
    }

    public function edit($blog_id){

      //ekstension gambar
    //  $ext = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
      // menyiapkan data
      $data = [
                'blog_ID' => $blog_id,
                'judul' => $this->input->post('judul'),
                'bahan' => $this->input->post('bahan'),
                'cara' => $this->input->post('cara'),
                'user_ID' => $this->session->uid,
                'tanggal' => date('Y-m-d H:i:s')
                //'foto' => $ext
              ];
      // simpan data ke dalam session
      $this->session->blog_id = $blog_id;
      $this->db->where('blog_id',$blog_id);
      // simpan ke database dalam tabel 'blogs'
      $this->db->update( 'blogs', $data );
    }

    public function delete($blog_ID){
      $query = $this->db->query("DELETE FROM blogs WHERE blog_ID ='".$blog_ID."'");

    }







}
