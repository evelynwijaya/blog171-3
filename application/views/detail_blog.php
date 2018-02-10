
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
