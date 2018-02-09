<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="/home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/blog/post" class="nav-link">Post Resep</a></li>
        <li class="nav-item"><a href="/user/<?= $this->session->uid ?>" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="/signout" class="nav-link">Logout</a></li>



      <?php
        if( !isset($this->session->uid) ){
       ?>
              <li class="nav-item"><a href="/user/login" class="nav-link">Login</a>

      <?php } ?>


        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
