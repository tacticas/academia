<template>
    <div class="agendar-info-pago">
            <div class="card">
                <div class="card-header">Información sobre tu pago</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numero de Horas</th>
                                <th>Precio por hora</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input v-model.number="horas" type="number" name="" id=""></td>
                                <td>{{ price }} USD</td>
                                <td>{{ totalPrice }} USD</td>
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
        props: ['hrs'],
        data: function () {
            return {
                horas: 1,
                ruta: '',
                price: 0,
                total: 0
            }
        },
        methods:{
            getRuta: function() {
                this.ruta = window.location.pathname;
            },
            getPrice: function(){
                axios.get(this.ruta+'/get').then((response)=> this.price = response.data);
            }
        },
        mounted() {
        this.getRuta();
        this.getPrice();
        },
        computed:{
            totalPrice: function(){
                if(this.horas == 0){
                    this.horas = 1;
                }
                this.total = this.price * this.horas;
                return this.total;
            }
        }
    }
</script>
