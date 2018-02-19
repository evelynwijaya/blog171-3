
<div class="top">
  <br><br><br><br>
</div>

<div class="gambar">
  <?php
  echo "<img src=\"/asset/images/blog/".$blog['blog_ID'].".".$blog['foto']."\">";
  ?>
  <br>
</div>

<h1><?= $blog['judul']."<br>" ?></h1>
<h4>Bahan Yang dibutuhkan:</h4>
<p>
  <?php
      $bahan = str_replace("\n","<br>",$blog['bahan']);
      echo $bahan;
   ?>
</p>
<h4>Cara membuat:</h4>
<p>
  <?php
      $cara = str_replace("\n","<br>",$blog['cara']);
      echo $cara;
   ?>
</p>

<h4>DiTulis Oleh:</h4>
<p>
  <?php
  echo "<a href='/user/" . $blog['user_ID'] ."'>" . $blog['nama']."<a><br><br><br><br><br>";
  ?>
</p>



<?php
  if(($this->session->uid)==$blog['user_ID']){
 ?>

  <div class="form-group" id="bt_edit">
    <a href="/blog/edit/<?= $blog['blog_ID'] ?>">  EDIT  </a><br>
  </div>
  <div class="form-group" id="bt_delete">
    <a href="/blog/delete/<?= $blog['blog_ID'] ?>"> DELETE  </a><br>
  </div>

<?php } ?>

<br>


<?php
if (isset($this->session->uid)){
 ?>

  <h5 class="display-4">Share Your Opinion</h5>
        <div class="col-md mb-5 ftco-animate">
          <form action="/comment/submit/<?= $blog['blog_ID'] ?>" method="post">
            <div class="form-group">
              <input type="hidden" class="form-control" id="m_fname" name="blog_id" value="<?= $blog['blog_ID'] ?>">

              <textarea cols="30" rows="10" name="comment" class="form-control" placeholder="Write your message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
            </div>
          </form>
        </div>

 <!-- tampilan komentar -->
 <?php
 foreach( $comment as $comments ){
   ?>
      <div class="card text-center" id="comment">
        <div class="card-header" id="kop">
          <?=$comments['nama']?>
        </div>
        <div class="card-body">
          <p class="card-text"><?= $comments['comment']?></p>
        </div>
        <div class="card-footer text-muted">
          <?= $comments['tanggal']?>
        </div>
      </div>

  <?php
    }
  ?>





<?php } ?>
