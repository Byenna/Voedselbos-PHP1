Vue.component('shopping-cart', {
    data: function () {
        return {
            shopCart: false,
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

        addToLocalStorage() {
            window.localStorage.setItem('cart', 'hallo');

        },

        getFromLocalStorage() {
            let cart = window.localStorage.getItem('cart');
            console.log(JSON.parse(cart));
        },

        addArray() {
            let products = [
                {
                    name: 'apple',
                    amount: 3,
                },

                {
                    name: 'banana',
                    amount: 4,
                },
                
            ];
            window.localStorage.setItem('cart', JSON.stringify(products));
        },

        addToCart(id) {
            this.$root.$emit('add-to-cart', id);
        },
    },

    template: `
        <div>
            <i @click="showCart" class="btn btn-light bi bi-basket"></i>
            <div class="cart">
                <button @click.prevent="closeCart">close</button>
                <button @click.prevent="addToLocalStorage">STORE</button>
                <button @click.prevent="getFromLocalStorage">GET</button>
                <button @click.prevent="addArray">ARRAY</button>
            </div>
        </div>`,
})