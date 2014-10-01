<!DOCTYPE html>
<html>
<head>
  <?php 
  include "../components/html-head.php"; 
  ?>
</head>
<body>
  <div id="site-container">
    <?php 
    include "../components/site-header.php"; 
    ?>
    <main id="site-body">
      <section id="site-content">
        <?php   
          $run_twice = 0;
            foreach($blog_news as $blog_post) {
              if ($run_twice <= 1) {
                echo '<article class="blog-post">';
                  foreach($blog_post as $blog_tag => $blog_data) {
                    if ($blog_tag == 'post-title') {
                      echo '<h2 class="'.$blog_tag.'">'.$blog_data.'</h2>'; }
                    else {echo '<div class="'.$blog_tag.'">'.$blog_data.'</div>';};
                  };
                echo '</article>';
                $run_twice = $run_twice + 1;
              };
            };
          ?>
      </section>
    </main>
    <?php 
    include "../components/site-footer.php"; 
    ?>
  </div>
</body>
</html>