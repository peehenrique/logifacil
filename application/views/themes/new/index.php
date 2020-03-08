<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>LogiFacil</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/vendors/css/vendors.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/vendors/css/charts/apexcharts.css'); ?>">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: themes CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/bootstrap-extended.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/colors.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/components.css'); ?>">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/core/menu/menu-types/horizontal-menu.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/core/colors/palette-gradient.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/new/app-assets/css/pages/dashboard-ecommerce.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/themes/new/app-assets/vendors/css/tables/datatable/datatables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/themes/new/app-assets/css/plugins/forms/wizard.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/themes/new/app-assets/css/pages/faq.css') ?>">


  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/newassets/css/style.css'); ?>">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static  menu-expanded pace-done " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <?php $this->load->view('themes/new/includes/header');  ?>
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section id="faq-search">
          <div class="row">
            <div class="col-12">
              <div class="card faq-bg white">
                <div class="card-content">
                  <div class="card-body p-sm-4 p-2">
                    <h1 class="white">LOGI FACIL?</h1>
                    <p class="card-text mb-2">
                      INFORME O CODIGO DE RASTREIO
                    </p>
                    <form>
                      <div class="row">
                        <div class="col-9">
                          <fieldset class="form-group position-relative has-icon-left mb-0">
                            <input type="text" class="form-control form-control-lg" id="codigo_rastreio" name="codigo_rastreio" placeholder="Digite o codigo de rastereio">
                            <div class="form-control-position">
                              <i class="feather icon-search px-1"></i>
                            </div>
                          </fieldset>
                        </div>
                        <div class="col-3">
                          <button type="submit" class="btn btn-success btn-lg btn-block">Buscar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <?php
        if (isset($view)) {
          $this->load->view($view);
        }
        ?>

      </div>
    </div>
  </div>

  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <!-- BEGIN: Vendor JS-->
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/vendors.min.js'); ?>"></script>    <!-- BEGIN Vendor JS-->

  <!-- BEGIN: themes JS-->
  <script src="<?php echo base_url('assets/themes/new/app-assets/js/core/app-menu.js'); ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/js/core/app.js'); ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/js/scripts/components.js'); ?>"></script>
  <!-- <script src="<?php echo base_url('assets/themes/new/app-assets/js/scripts/pages/dashboard-ecommerce.js'); ?>"></script> -->

  <!-- END: Page JS-->
  <!-- BEGIN: Page JS-->
  <script src="<?php echo base_url('assets/themes/new/app-assets/js/scripts/datatables/datatable.js') ?>"></script>
  <!-- END: Page JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/tables/datatable/vfs_fonts.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/tables/datatable/datatables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/extensions/jquery.steps.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/themes/new/app-assets/vendors/js/forms/validation/jquery.validate.min.js') ?>"></script>
  <!-- END: Page Vendor JS-->


  <!-- BEGIN: Page JS-->
  <script src="<?php echo base_url('assets/themes/new/app-assets/js/scripts/forms/wizard-steps.js') ?>"></script>
  <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
