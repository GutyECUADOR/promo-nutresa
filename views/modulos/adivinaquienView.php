<?php require_once 'sis_modules/navbar.php' ?>

<div class="main-container">
    
    <section class="text-light" style="background: radial-gradient(circle, #ffdc3e 0%, #ffd72c 100%); padding: 0 !important">
        <div class="container">
            
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <img src="assets/img/KV-ADIVINA-CORONA-NUTRESA.png" alt="Promo" class="img-responsive w-100 zoom mb-1" style="border-radius:10px">
                </div>
            </div>

            
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6 text-center">
                    <img src="assets/img/MECANICA-1.png" alt="premios" class="img-responsive w-100 zoom">
                </div>
                <div class="col-12 col-md-10 col-lg-6 text-center">
                    <img src="assets/img/MECANICA-2.png" alt="premios" class="img-responsive w-100 zoom">
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6 text-center">
                    <img src="assets/img/MECANICA-3.png" alt="premios" class="img-responsive w-100 zoom">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6 text-center">
                    <img src="assets/img/BODEGON-CORONA.png" alt="premios" class="img-responsive w-100 zoom">
                </div>
            </div>

          
          
            <!--end of row-->
        </div>
    <!--end of container-->
    </section>

    
    <?php require_once 'modals/terminosModal.php' ?>
    <?php require_once 'sis_modules/footer.php' ?>
    <?php require_once 'modals/whatsapp.php'?>

</div>


<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->
<script type="text/javascript" src="assets/js/jquery.fireworks.js"></script>


<script type="text/javascript" >
  $('.fireworks').fireworks();
  $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#downloadpopover").popover("show");
    })
</script>

<script type="text/javascript">
      $(window).on('load', function() {
          $('#modal-video').modal('show');

          $("#modal-video").on('hidden.bs.modal', function (e) {
            $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));
            $('#modal-fin').modal('show');
        });
      });
</script>