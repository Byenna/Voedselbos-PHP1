//Create a new component for product-details with a prop of details. 

Vue.component('product-details', {
    props: {
      details: {
        type: Array,
        required: true
      }
    },
    template: `
      <ul>
        <li class='fs-3' v-for="detail in details">{{ detail }}</li>
       
      </ul>
    `
  })
  
  
  
  Vue.component('product', {
    props: {
   
    },
    template: `
    
     <div class="product">
     
     
     
     

        <div class="product-image">
          <img class="img_detail" :src="image" />
        </div>
  
        <div class="product-info">
            <h1>{{ product }}</h1>
            <p v-if="inStock">Op voorraad</p>
            <p v-else>Niet op voorraad</p>
           
  
            <product-details :details="details"></product-details>
  <hr>
            <div  v-for="variant in variants" 
     :key="variant.variantId">
    <ul >
        <li class="btn btn-outline-success fs-3" @mouseover="updateProduct(variant.variantImage)">{{ variant.variantColor }}</li></p>
      </ul>
        </div>
  
            <button class=" btn-outline-success mb-4 btn" v-on:click="addToCart" 
              :disabled="!inStock"
              :class="{ disabledButton: !inStock }"
              >
            Add to cart
            </button>
  
            <div class="cart">
              <p>Cart({{ cart }})</p>
            </div>
  
         </div>  
      
    </div>
     `,
    data() {
      return {
          product: 'Uit eigen bodem!',
          image: '/assets/images/tomaat.jpg',
          brand: 'Vue Mastery',
          selectedVariant: 0,
          details: ['Biologisch', 'Natuurlijke bestrijding', 'Uit Nederland'],
          variants: [
            {
              variantId: 2234,
              variantColor: 'Donkere tomaten',
              variantImage:  "/assets/images/xtomato1.jpg",
              variantQuantity: 10     
            },
            {
              variantId: 2235,
              variantColor: 'Groene tomaten',
              variantImage: "/assets/images/xtomato2.jpg",
              variantQuantity: 0     
            },
            {
                variantId: 2236,
                variantColor: 'Gele tomaten',
                variantImage:  "/assets/images/xtomato3.jpg",
                variantQuantity: 10     
              },
        
          ],
          cart: 0
      }
    },
      methods: {
        addToCart: function() {
            this.cart += 1
        },
        updateProduct(variantImage) {
            this.image = variantImage
          }
      },
      computed: {
          title() {
              return this.brand + ' ' + this.product  
          },
          inStock(){
              return this.variants[this.selectedVariant].variantQuantity
          },
         
         
      }
  })
  
//   var app = new Vue({
//       el: '#app',
//       data: {
//       }
//   })