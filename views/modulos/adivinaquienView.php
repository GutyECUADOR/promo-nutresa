<?php require_once 'sis_modules/navbar.php' ?>

<div class="main-container">
    
    <section class="text-light" style="background: radial-gradient(circle, rgba(2,174,236,1) 0%, rgba(1,85,171,1) 100%);">
        <div class="container">
            <div class="row justify-content-center mb-2">
            
            </div>
            <!--end of row-->
            <div class="row justify-content-center">
           
            </div>
            <!--end of row-->
        </div>
    <!--end of container-->
    </section>
   
    <?php require_once 'modals/terminosModal.php' ?>
    <?php require_once 'sis_modules/footer.php' ?>

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