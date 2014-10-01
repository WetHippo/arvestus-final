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
          echo team_members('Kaspar Naaber', 'kaspar.naaber@khk.ee', 'kaspar.naaber@khk.ee');
          echo team_members('Peeter Kartul', 'peeter.kartul@khk.ee', 'Jalgrattad');
          echo team_members('Erki Nool', 'erki.nool@khk.ee', 'Jalgpall');
          echo team_members('Timo Tigu', 'timo.tigu@khk.ee', 'Raamatud');
          echo team_members('Silver Kuu', 'silver.kuu@khk.ee', 'Peod');
          echo team_members('Tauno Päike', 'tauno.paike@khk.ee', 'PHP');
        ?>
      </section>
    </main>
    <?php 
    include "../components/site-footer.php"; 
    ?>
  </div>
</body>
</html>