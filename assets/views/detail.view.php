<div>
           <div class="pl-3 cart">
               

               <div class="row" v-for="item in cart.items">
                   <div class="col-md-2"><img :src="'/assets/images/' + item.image" width="100%"></div>                   
                   <div class="col-md-5"> item.name </div>
                   <div class="col-md-1"> item.amount </div>
                   <div class="col-md-2"> €  item.price </div>
                   <div class="col-md-2"> €  item.totalPrice </div>
               </div>

               <div class="row mt-3">
                   <div class="col-md-2"></div>
                   <div class="col-md-5">Total</div>
                   <div class="col-md-1"> cart.totalItems </div>
                   <div class="col-md-2"></div>
                   <div class="col-md-2"> €  cart.totalPrice </div>
               </div>

               <div class="row cart-footer">
                   <div class="col-md-2"></div>
                   <div class="col-md-5 btn btn-info my-1">Verder winkelen</div>
                   <div class="col-md-1"></div>
                   <a href="/?page=checkout" class="col-md-2 btn btn-success my-1">Afrekenen</a>
                   <div class="col-md-2"></div>
               </div>
           </div>
       </div>
       `,