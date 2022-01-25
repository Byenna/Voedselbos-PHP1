Vue.component('products', {
    data: function () {
        return {
            products: [],
            
        }
    },

    props: {
        
    },

    methods: {
        addToCart(product) {
            product.stock--;

            this.$root.$emit('add-to-cart', product);
        },
    },

    created() {
        let self = this;

        // Get all products calling function in controller (Ajax call)
        axios({
            method: 'GET',
            url: '?page=items&function=getdata',
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(function(response) {
            self.products = response.data.products;
        }).catch(function(response) {

        })
    },

    template: `
        <div class="row">
            <div class="col-md-4 pt-3" v-for="product in products">
                <div class="card my-6">
                    <img :src="'/assets/images/' + product.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.title }}</h5>
                        <p class="card-text">{{ product.description }}</p>
                        <p class="card-text"> € {{ product.price }}</p>
                        <p>Voorraad: {{ product.stock }}</p>
                        <div class="row">                       
                        <input type="button" class="col-md-4 btn btn-primary" :disabled="product.stock === 0" @click="addToCart(product)" value="Order">                
                   </div>
                    </div>
                   
                </div>
            </div>
        </div>
        `,
})