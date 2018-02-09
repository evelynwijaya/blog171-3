<br><br><br>
<div class="col-md mb-5 ftco-animate">
  <form action="/blog/subedit/<?=$blog_ID?>" method="post">
    <div class="form-group">
      <h1>Tulis Resep Anda</h1>
      <label for="name" class="sr-only">Nama resep</label>
      <input type="text" class="form-control" placeholder="Nama Resep" name="judul" value="<?=$judul?>">
    </div>
    <div class="form-group">
      <label for="email" class="sr-only">Bahan-bahan</label>
      <textarea cols="20" rows="10" class="form-control" placeholder="Bahan-Bahan" name="bahan" ><?=$bahan?></textarea>
    </div>
    <div class="form-group">
      <label for="message" class="sr-only">Cara Membuat</label>
      <textarea cols="30" rows="10" class="form-control" placeholder="Cara membuat" name="cara"><?=$cara?></textarea>
    </div>
    <!-- untuk attach file -->
    <!-- <form action="/blog/upload" method="post" enctype="multipart/form-data" > -->
      <div class="form-group">
        <label for="exampleFormControlFile1">Upload Foto Makanan</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
      </div>
    <!-- </form> -->
    <!-- akhir attach file -->
    <br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg" value="Post">
    </div>
  </form>
</div>
