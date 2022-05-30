<!-- Navbar -->
<nav class="navbar navbar-dark navbar-bg">
  <div id="navbar" class="container d-inline-block">
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-12 title-container">
        <?php
          $directLink = '?view=home';
        
          if($_SESSION['userType'] == 'admin') {
            $directLink = '?view=dashboard';
          }
        ?>
        <a href=<?= $directLink; ?> class="navbar-brand">Second News Media</a>
      </div>
      <div class="col-lg-2 offset-lg-3 col-md-4 offset-md-1 col-sm-6 col-12">
        <input style="display: none;" type="search" class="form-search" placeholder="Search" />
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 button-container">
        <?php
                if(isset($_SESSION['login']) && $_SESSION['login'] == true && isset($account)) {
                    echo "<a href=\"?view=logout\" class=\"link btn-logout\">Logout</a>";
                    echo "<a id=\"username\" class=\"username\">{$account['username']}</a>";
                    echo "<a href=\"#\" class=\"profile-picture\"><img src=\"img/{$account['foto_profil']}\" alt=\"user-picture\" title=\"Your Profile\"></a>";
                } else {
                    echo "<a href=\"?view=register\" class=\"link btn-register\">Register</a>
                    <a href=\"?view=login\" class=\"link btn-login\">Login</a>";
                }
            ?>
      </div>
    </div>
  </div>
</nav>

<!-- Categories Bar -->
<div class="container-fluid">
  <div class="row category-container">
    <div class="col-xl-12">
      <ul class="category-list">
        <li class="category-item"><a id="chome" href="?view=home" class="item-link">Home</a></li>
        <li class="category-item"><a id="c1" href="?view=kategori&kategori=1" class="item-link">National</a></li>
        <li class="category-item"><a id="c2" href="?view=kategori&kategori=2" class="item-link">International</a></li>
        <li class="category-item"><a id="c3" href="?view=kategori&kategori=3" class="item-link">Politics</a></li>
        <li class="category-item"><a id="c4" href="?view=kategori&kategori=4" class="item-link">Economy</a></li>
        <li class="category-item"><a id="c5" href="?view=kategori&kategori=5" class="item-link">Education</a></li>
        <li class="category-item"><a id="c6" href="?view=kategori&kategori=6" class="item-link">Tech</a></li>
        <li class="category-item"><a id="c7" href="?view=kategori&kategori=7" class="item-link">Sports</a></li>
        <li class="category-item"><a id="c8" href="?view=kategori&kategori=8" class="item-link">Health</a></li>
        <li class="category-item"><a id="c9" href="?view=kategori&kategori=9" class="item-link">Lifestyle</a></li>
        <li class="category-item"><a id="c10" href="?view=kategori&kategori=10" class="item-link">Food</a></li>
      </ul>
    </div>
  </div>
</div>