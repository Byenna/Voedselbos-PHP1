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
            <i @click="showCart" class="btn btn-light bi bi-basket"></i>
            <div class="cart">
                <button @click.prevent="closeCart">close</button>
                
                <div class="row" v-for="item in cart.items">
                    <div class="col-md-2">
                        <img :src="'/assets/images/' + item.image" width="100%">
                    </div>
                    <div class="col-md-5">{{ item.name }}</div>
                    <div class="col-md-1">{{ item.amount }}</div>
                    <div class="col-md-2">{{ item.price }}</div>
                    <div class="col-md-2">{{ item.totalPrice }}</div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">Total</div>
                    <div class="col-md-1">{{ cart.totalItems }}</div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">{{ cart.totalPrice }}</div>
                </div>
            </div>
        </div>`,
})