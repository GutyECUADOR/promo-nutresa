<?php require_once 'sis_modules/navbar.php' ?>

<div class="main-container" id="app">
  
        <section class="text-light" style="background: radial-gradient(circle, #ffdc3e 0%, #ffd72c 100%)">
            <div class="container">
                <div class="row justify-content-center mb-2">
                <div class="col-auto text-center">
                    <h3 class="text-secondary-nutresa" style="font-weight: bold; line-height: 0.1;">EVENTO EN VIVO</h3>
                    <h4 class="text-secondary-nutresa" style="font-weight: bold" style="line-height: 0.1;">Domingo, 04 de Julio 2021 - De 5pm a 7pm</h4>
                    
                    
                     <p class="text-secondary-nutresa">
                        Ingresa el código de promoción para poder acceder al evento.
                    </p>
                </div>

                <!--end of col-->
                </div>
                <!--end of row-->
                <div class="row justify-content-center" id="formregistro" v-if="!search_user.isAutenticated">
                    <div class="col-12 col-md-10 col-lg-6" >

                        <div 
                        class="flipper" 
                        data-datetime="2021-06-20 00:00:00"
                        data-reverse="true" 
                        data-template="d|H|i|s" 
                        data-labels="Dias|Horas|Minutos|Segundos" 
                        id="modalFlipper">
                        </div>
                        
                        <form  @submit.prevent="verify_code">
                            <div class="form-group">
                                <label for="login-email" class="text-secondary-nutresa">Correo</label>
                                <input class="form-control form-control-lg" v-model="usuario.correo" type="email" name="correo" id="login-email" placeholder="Email" required disabled/>
                            </div>
                            <div class="form-group">
                                <label for="login-nombre" class="text-secondary-nutresa">Nombre</label>
                                <input class="form-control form-control-lg"  v-model="usuario.nombre" type="text" name="nombre" id="login-nombre" placeholder="Nombre" required disabled/>
                            </div>
                            <div class="form-group">
                                <label for="login-telefono" class="text-secondary-nutresa">Teléfono</label>
                                <input class="form-control form-control-lg" v-model="usuario.telefono" type="text" name="telefono" id="login-telefono" placeholder="Teléfono" required disabled/>
                            </div>
                            <div class="form-group">
                                <label for="login-codigo" class="text-secondary-nutresa">Codigo</label>
                                <input class="form-control form-control-lg" v-model="usuario.codigo" type="password" name="codigo" id="login-codigo" placeholder="Código" required disabled/>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg button-nutresa" style="background-color: #ffe000;" :disabled="search_user.isloading"  >
                                    <i class="fa" :class="[{'fa-spin fa-refresh': search_user.isloading}, {  'fa-key' : !search_user.isloading  }]" ></i> Ingresar al evento
                                </button>
                            </div>
                        </form>
                    </div>
                <!--end of col-->
                </div>

                <div class="row" id="video" v-if="search_user.isAutenticated">
                    <div class="embed-responsive embed-responsive-16by9 mb-3 hide" style="border-width: 4px; margin-top:5px; border-radius: 5px;">
                        <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" :src='getURLVideo()'></iframe>
                    </div>
                </div>

                
                <!--end of row-->
            </div>
      
        </section>
    
    
    <?php require_once 'modals/terminosModal.php' ?>
    <?php require_once 'sis_modules/footer.php' ?>
    <?php require_once 'modals/whatsapp.php'?>
</div>


<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/vue.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.flipTimer.js"></script>

<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets\js\pages\evento.js?<?php echo date('Ymdhiiss')?>"></script>

<script type="text/javascript" >
  $(function () {
        $('#modalFlipper').flipper('init');
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#downloadpopover").popover("show");
        })
</script>