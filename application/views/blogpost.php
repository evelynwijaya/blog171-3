<?php
foreach( $blogpost as $blog ){
  ?>
<div class="col-lg-4 col-md-6 col-sm-6">
  <div class="media d-block mb-4 text-center ftco-media ftco-animate">
    <div class="media-body p-md-5 p-4">
      <h5 class="mt-0 h4">

        <?php
        echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br><br>";
        ?>
      </h5>
    </div>
  </div>
</div>

<?php
}
?>
