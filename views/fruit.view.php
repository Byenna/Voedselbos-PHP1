<!-- start items to sell -->


    <!DOCTYPE html>
    <html lang="en">

   <div id="allItems">
			<section id="form-container" class="itemsFirstRow">
				<div class="container">
                    <div class="row">

					

                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo 'assets/images/' . $fruit['image'] ?>" class="card-img-top" alt="<? $fruit['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fruit['title'] ?></h5>
                            <p class="card-text"><?php echo $fruit['description'] ?></p>
                            <p class="card-text">Prijs: €  <?php echo $fruit['price'] ?></p>
                            <a href="#" class="buttonItem btn btn-primary">Bestel</a>
                         
                        </div>
                        </div>

                  
                
                </div>
				</div> 
			</section>
		</div>
		<!-- end items to sell -->

    </html>