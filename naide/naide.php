<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">

        <article class="blog-post">

<?php
  $blog =
    array(
      array(
        "esimene" => "jada_1_esimene_väärtus",
        "teine" => "jada_1_teine_väärtus",
        "kolmas" => "jaga_1_kolmas_väärtus"
      ),

      array(
        "esimene" => "jada_2_esimene_väärtus",
        "teine" => "jada_2_teine_väärtus",
        "kolmas" => "jaga_2_kolmas_väärtus"
      ),

      array(
        "esimene" => "jada_3_esimene_väärtus",
        "teine" => "jada_3_teine_väärtus",
        "kolmas" => "jaga_3_kolmas_väärtus"
      )
    )
  ;
?>


          <?php
          foreach ($blog as $blog_post) {
            echo $blog_post["esimene"] . "<br>";
            echo $blog_post["teine"] . "<br>";
          }
          ?>

        </article>

      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
