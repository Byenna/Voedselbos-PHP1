Vue.component('shopping-cart', {
    data: function () {
        return {
            cart: window.localStorage.getItem('cart') !== null ? JSON.parse(window.localStorage.getItem('cart')) : {},
        }
    },

    props: {
        
    },

    methods: {
        closeCart() {
            $('.layer').fadeOut(); 
            $('.cart').fadeOut();
        },

        showCart() {
            $('.layer').fadeIn();
            $('.cart').toggle({
                direction: 'right',
            });
        },
    },

    template: `
        <div>
           
            <a @click="showCart" class="btn bi bi-basket"></a>
           
            <div class="cart fs-4">
                
                <button class="btn fs-3" @click.prevent="closeCart">close</button>

                <div class="row mt-3 mb-3 fw-bold">   
                    <div class="col-md-2">Afbeelding</div>                   
                    <div class="col-md-3">Naam</div>
                    <div class="col-md-2">Aantal</div>
                    <div class="col-md-2">Prijs</div>
                    <div class="col-md-3">Totaal Prijs</div>
                </div>

                <div class="row mb-3" v-for="item in cart.items">
                    <div class="col-md-2 "><img class='border_image_cart' :src="'/assets/images/' + item.image" width="100%"></div>                   
                    <div class="col-md-3">{{ item.name }}</div>
                    <div class="col-md-2">{{ item.amount }}</div>
                    <div class="col-md-2"> € {{ item.price }}</div>
                    <div class="col-md-3"> € {{ item.totalPrice }}</div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 fw-bold">Total</div>
                    <div class="col-md-2">{{ cart.totalItems }}</div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3"> € {{ cart.totalPrice }}</div>
                </div>

                <div class="row cart-footer justify-content-center">
                    
                    <a href="/?page=orders" class="col-md-5 btn mt-3 fs-4">Verder winkelen</a>
                  

                   
                    <a href="/?page=checkout" class="col-md-3 btn mt-3 fs-4">Afrekenen</a>
                    </div>
                </div>
            </div>
        </div>
        `,
})