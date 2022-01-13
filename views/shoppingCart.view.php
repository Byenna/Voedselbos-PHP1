<!-- start shoppingcart -->
<div v-show="shopCart" id="cartContainer" class="container-fluid fixed-top ">
			<div :class="{cart : shopCart}">
				<!-- cart item -->
				<div>
					<div v-for="cart in carts" class="cart-item d-flex justify-content-between text-capitalize my-3">
						<img src="#" class="img-fluid rounded-circle" id="item-img" alt="">

						<div class="item-text">
							<p id="cart-item-title" class="font-weight-bold mb-0">{{ cart.name }}</p>
							<span>€</span>
							<span id="cart-item-price" class="cart-item-price mb-0">{{ cart.price }}</span>
						</div>

						<a href="#" id='cart-item-remove' class="cart-item-remove">
							<i @click="removeItemFromCart(cart[0])" class="fas fa-trash"></i>
						</a>
					</div>

				</div>

				<P>Aantal producten in mandje: {{ cart.length }}</P>
				<!-- end cart item-->

				<!-- cart total -->
				<div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
					<h5></h5>
					<h5> € <strong id="cart-total" class="font-weight-bold"></strong> Totale prijs:
						{{ this.prices.reduce(function sumOf(acc, curr) {
							acc = acc + curr
							return acc
						}, 0)  }}</h5>
				</div>
				<!--end cart total -->
				<!-- cart buttons -->
				<div class="cart-buttons-container mt-3 d-flex justify-content-between">
					<a @click="closeCart" href="<?php echo "index.php?page=items#allItems"?>" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">Verder
						Winkelen</a>
					<a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">Bestellen</a>
				</div>
				<!--end of  cart buttons -->
				<!--  -->
			</div>
		</div>
		<!-- end shoppingcart -->