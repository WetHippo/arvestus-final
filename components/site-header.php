<header id="site-header">
  <div class="site-title">
    <h1>
      <?php 
      echo $site_title; 
      ?>
    </h1>
  </div>
  <nav class="menu-main">
    <ul class="menu">
      <?php 
        foreach($menu_main as $title => $page)
        {
        echo '<li><a href="'.$page.'">'.$title.'</a></li>';
      }
      ?>
    </ul>
  </nav>
</header>