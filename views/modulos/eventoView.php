<?php require_once 'sis_modules/navbar.php' ?>

<div class="main-container" id="app">
  
        <section class="text-light" style="background: linear-gradient(135deg, #046224 0%, #7b9236  100%);">
            <div class="container">
                <div class="row justify-content-center mb-2">
                <div class="col-auto text-center">
                    <h3 class="text-secondary-nutresa">EVENTO EN VIVO</h3>
                     <p>
                        Ingresa el código de promoción para poder acceder al evento.
                    </p>
                </div>

                <!--end of col-->
                </div>
                <!--end of row-->
                <div class="row justify-content-center" id="formregistro" v-if="!search_user.isAutenticated">
                    <div class="col-12 col-md-10 col-lg-6" >
                        <form  @submit.prevent="verify_code">
                            <div class="form-group">
                                <label for="login-email">Correo</label>
                                <input class="form-control form-control-lg" v-model="usuario.correo" type="email" name="correo" id="login-email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="login-nombre">Nombre</label>
                                <input class="form-control form-control-lg"  v-model="usuario.nombre" type="text" name="nombre" id="login-nombre" placeholder="Nombre" required/>
                            </div>
                            <div class="form-group">
                                <label for="login-telefono">Teléfono</label>
                                <input class="form-control form-control-lg" v-model="usuario.telefono" type="text" name="telefono" id="login-telefono" placeholder="Teléfono" required/>
                            </div>
                            <div class="form-group">
                                <label for="login-codigo">Codigo</label>
                                <input class="form-control form-control-lg" v-model="usuario.codigo" type="password" name="codigo" id="login-codigo" placeholder="Código" required/>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-success" :disabled="search_user.isloading"  >
                                    <i class="fa" :class="[{'fa-spin fa-refresh': search_user.isloading}, {  'fa-key' : !search_user.isloading  }]" ></i> Ingresar al evento
                                </button>
                            </div>
                        </form>
                    </div>
                <!--end of col-->
                </div>

                <div class="row" id="video" v-if="search_user.isAutenticated">
                    <div class="embed-responsive embed-responsive-16by9 mb-3 hide" style="border-width: 4px; margin-top:5px; border-radius: 5px;">
                        <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/KvRVky0r7YM?autoplay=true&controls=1"></iframe>
                    </div>
                </div>

                
                <!--end of row-->
            </div>
      
        </section>
    
    
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
</div>


<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/vue.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->
<script type="text/javascript" src="assets/js/jquery.fireworks.js"></script>

<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets\js\pages\evento.js?<?php echo date('Ymdhiiss')?>"></script>

<script type="text/javascript" >
  $('.fireworks').fireworks();
  $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#downloadpopover").popover("show");
        })
</script>