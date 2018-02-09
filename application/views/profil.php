<br><br><br>
    <h1><?= $user['nama'] ?></h1>
    <h5><?=$user['email']?></h5>
<br><br><br><br>
    <h4>Blog :</h4>
      <?php
      foreach( $user as $userbyid ){
        ?>
      <h5><?php
      echo "<a href='/blog/" . $user['blog_ID'] ."'>" . $user['judul']."<a><br>";
      ?></h5>
      <?php
      }
      ?>
