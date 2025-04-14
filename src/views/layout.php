<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/partials/head.php'; ?>
  
  <body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include __DIR__ . '/partials/sidebar.php'; ?>
        <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <!-- Navbar Header -->
          <?php include __DIR__ . '/partials/navbar.php'; ?>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
              <!-- Todas as páginas precisam ter os BreadCrumbs que esta presente na /dashboard/index.php -->
              <?= $content ?>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <?php include __DIR__ . '/partials/footer.php'; ?>
        <!-- Footer -->
        
      </div>
    </div>

    <!-- SCRIPTS -->
    <?php include __DIR__ . '/partials/scripts.php'; ?>
    <!-- .END SCRIPTS  -->
    
    
  </body>
</html>
