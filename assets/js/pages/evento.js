class Usuario {
    constructor() {
        this.correo = '';
        this.nombre = '';
        this.telefono = '';
        this.codigo = '';
    }

  }

const app = new Vue({
    el: '#app',
    data: {
        title: 'Evento en Vivo',
        usuario: new Usuario(),
        search_user: {
        isloading: false,
        isAutenticated: false
      },
    },
    methods:{
        async verify_code() {
            this.search_user.isloading = true;
            let formData = new FormData();
            formData.append('usuario', JSON.stringify(this.usuario));  
            const response = await fetch(`./api/index.php?action=verify_code`, {
                method: 'POST',
                body: formData
                })
                .then(response => {
                    this.search_user.isloading = false
                    return response.json();
                }).catch( error => {
                    console.error(error);
                }); 

            if (response.commit) {
                this.search_user.isAutenticated = true;
                alert(response.message);
            }else{
                this.search_user.isAutenticated = false;
                alert(response.message);
            }
            
            
            
        }
    },
    mounted(){

    }
 
})