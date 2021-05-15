const app = new Vue({
    el: '#app',
    data: {
        title: 'Evento en Vivo',
        search_user: {
        isloading: false,
        isAutenticated: false
      },
    },
    methods:{
        async verify_code(codigo) {
            this.search_user.isloading = true;
            let busqueda = { codigo };
            const response = await fetch(`./api/index.php?action=verify_coded&busqueda=${busqueda}`)
                .then(response => {
                    this.search_user.isloading = false
                    return response.json();
                }).catch( error => {
                    console.error(error);
                }); 

            this.search_user.isAutenticated = true;
            alert(response.message);
            
        }
    },
    mounted(){

    }
 
})
