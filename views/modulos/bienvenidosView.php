<div class="navbar-container">
    <div class="navbar-dark" data-sticky="top" style="background-color:#046224">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 text-center">
                    <img alt="Logo" src="assets/img/logo.png" style="width:240px"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="fireworks">
        <section class="text-light" style="background: linear-gradient(135deg, #046224 0%, #7b9236  100%); padding: 1rem 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center mb-2">
                        <img alt="Logo" src="assets/img/MOMENTOS-UNICOS-NUTRESA.png" style="width:100%"/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <p style="z-index: 2;">
                            Bienvenido a <span class="text-primary-nutresa">Momentos Únicos Nutresa</span>, el lugar donde viven nuestras mejores promociones y donde ganar depende de tu habilidad.</br>
                            Solo debes inscribirte y participar en todas las iniciativas de Nutresa que mes a mes, te podrán premiar.
                        </p>
                        <h3 class="display-5 text-primary-nutresa" style="z-index: 2;">Promoción vigente del 1 al 30 de Junio</h3>
                    </div>
                <!--end of col-->
                </div>
                <!--end of row-->
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <div class="card-body row no-gutters align-items-center ">
                            <a href="?action=mecanica-adivina-quien" style="z-index: 2;">
                                <img src="assets/img/BANNER-CORONA1.png" alt="Promo" class="img-responsive w-100 zoom" style="border-radius:10px">
                            </a>
                        </div>
                        
                    </div>
                <!--end of col-->
                </div>
                <!--end of row-->
            </div>
        <!--end of container-->
        </section>
    </div>
    
    <!-- <section>
        <div class="container">
            <div class="row justify-content-center mb-5">
            <div class="col-auto">
                <h3 class="h4">Nuestras promociones</h3>
            </div>
          
            </div>
           
            <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <ul class="feature-list feature-list-sm row">

                <li class="col-6 col-md-4">
                    <a class="card text-center" href="#">
                    <div class="card-body">
                        <img src="assets/img/promojet.png" alt="promo" class="w-100">
                    </div>
                    </a>
                </li>

                <li class="col-6 col-md-4">
                    <a class="card text-center" href="#">
                    <div class="card-body">
                        <img src="assets/img/mesdelchocolate.png" alt="promo" class="w-100">
                    </div>
                    </a>
                </li>

                <li class="col-6 col-md-4">
                    <a class="card text-center" href="#">
                    <img src="assets/img/eltrineoregalos.png" alt="promo" class="w-100">
                    </a>
                </li>

                </ul>
            </div>
            </div>
         
        </div>
    </section> -->
    
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