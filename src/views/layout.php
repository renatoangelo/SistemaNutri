<!doctype html>
<html lang="en">
  
  <!--begin::Head-->
  <?php include __DIR__ . '/partials/head.php'; ?>
  <!--end::Head-->


  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
        <?php include __DIR__ . '/partials/navbar.php'; ?> 
      <!--end::Header-->

  
      <!--begin::Sidebar-->
      
        <?php include __DIR__ . '/partials/sidebar.php'; ?>

      <!--end::Sidebar-->


      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          
          <div class="container-fluid">
            
            <!--begin::Row-->
              <!-- AQUI ENTRA O BREADCRUMB DENTRO DE CADA VIEW - RENATOANGELO -->
            <!--end::Row-->
          </div>

          <!--end::Container-->
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
              <!--begin::Row-->
              <?=$content ?>
              <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

      <!--end::App Main-->
      
      <!--begin::Footer-->
      <?php include __DIR__ . '/partials/footer.php'; ?>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    
    <!--begin::Script-->
    <?php include __DIR__ . '/partials/scripts.php'; ?>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
