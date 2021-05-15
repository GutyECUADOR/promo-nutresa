
<div class="main-container" style="background: linear-gradient(135deg, #19518c 0%, #4582EC  100%);" >
  <div class="fireworks">
    <section class="height-100 flush-with-above" style="z-index: 2; padding-top:1px">
      <div class="container text-white">
        <div class="row justify-content-between">
          <div class="col-12 text-center">
            <img alt="Image" src="assets/img/logo.png" class="w-50" />
          </div>
          <!--end of col-->
          <div class="col-12 col-md-7 col-lg-4 mb-4 text-center">
            <a href="?action=colombia"><img alt="Image" src="assets/img/Bandera-colombia.png" class="w-50 zoom" /></a>
            <h2 class="h1">Colombia</h2>
          </div>
          <!--end of col-->
          <div class="col-12 col-md-7 col-lg-4 mb-4 text-center">
            <a href="?action=ecuador"><img alt="Image" src="assets/img/Bandera-ecuador.png" class="w-50 zoom" /></a>
            <h2 class="h1">Ecuador</h2>
          </div>
          <!--end of col-->
          <div class="col-12 col-md-7 col-lg-4 mb-4 text-center">
            <a href="?action=peru"><img alt="Image" src="assets/img/Bandera-peru.png" class="w-50 zoom" /></a>
            <h2 class="h1">Perú</h2>
          </div>
          <!--end of col-->
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    <!--end of section-->
    <section class="space-sm flush-with-above" style="z-index: 2; padding-top:1px">
      <div class="container">
        <div class="row">
          <div class="col text-center">
             <a href="#" style="z-index: 2; padding-top:1px" data-toggle="modal" data-target="#terminosModal" class="text-white">Términos & Condiciones</a>
          </div>
          <!--end of col-->
        </div>
        
        <div class="row">
          <div class="col text-center">
                <span class="text-muted text-small text-white">Derechos Reservados ☕ <?php echo date('Y')?></span>
          </div>
          <!--end of col-->
        </div>
        
        
        
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
  </div>

</div>

    <!-- Modal Terminos -->
    <?php require_once 'modals/terminosModal.php'?>
    
    

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