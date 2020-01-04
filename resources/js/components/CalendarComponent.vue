<template>
    <div class="agendar-info-pago">
            <div class="card">
                <div class="card-header">Selecciona La hora</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miercoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in items" :key="index">
                                <td>9:00</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <button href="" class="btn btn-primary">Pagar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
              
            }
        },
        methods:{
           /* getRuta: function() {
                this.ruta = window.location.pathname;
            },
            getPrice: function(){
                axios.get(this.ruta+'/get').then((response)=> this.price = response.data);
            } */
        },
        mounted() {
        /*this.getRuta();
        this.getPrice();*/
        },
        computed:{
           /* totalPrice: function(){
                if(this.horas == 0){
                    this.horas = 1;
                }
                this.total = this.price * this.horas;
                return this.total;
            }*/
        }
    }
</script>
