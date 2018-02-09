<!DOCTYPE html>

    <section class="ftco-cover" style="background-image: url(asset/images/bc1.png);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-12">
            <h1 class="ftco-heading ftco-animate mb-3">Resep Andalan Keluarga</h1>
            <h2 class="h5 ftco-subheading mb-5 ftco-animate">Let's Try to Cook!</a></h2>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Resep &amp; Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Inspirasi Menu Harian untuk Keluarga</p>
              </div>
            </div>
          </div>


          <?php
          foreach( $blogs as $blog ){
            ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center ftco-media ftco-animate">
              <?php
              echo "<img src=\"./asset/images/blog/".$blog['blog_ID'].".".$blog['foto']."\">";
              ?>
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">
                  <?php
                  echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>";
                  ?>
                </h5>
              </div>
            </div>
          </div>

          <?php
        }
          ?>



        </section>
