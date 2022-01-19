
    <div id="allItems">
			<section id="form-container" class="itemsFirstRow">
				<div class="container">
                    <div class="row">
                    <div id="home_text_products"><h1>De producten</h1></div>
					<?php foreach($fruits as $fruit) : ?>

                        <div class="card" style="width: 18rem;">
                        <img src="<?= $_ENV['IMAGE_PATH'] . $fruit['image']?>" class="card-img-top" alt= "<?= $fruit['title']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $fruit['title'] ?></h5>
                            <p class="card-text"><?= $fruit['description'] ?></p>
                            <p class="card-text">Prijs: €  <?= $fruit['price'] ?></p>
                            <!-- <a href="#" class="buttonItem btn btn-primary">Bestel</a> -->
                            <!-- <h6><br /><a href="index.php?fruit=<?= $fruit['id']; ?>" class="moreInfo">MEER INFO</a></h6> -->

                        
                         <input type="hidden" name="id_to_add" value="<?= $fruit['id'] ?>">
                        <input @click="addToCart(<?= $fruit['id'] ?>)" class="buttonItem btn btn-primary" type="button" name="add" value="in winkelmandje" class="btn brand z-depth-0">
                         
                        </div>
                        </div>


                    <?php endforeach; ?>
                
                    
                </div>
				</div> 
			</section>
		</div>
		<!-- end items to sell -->



       