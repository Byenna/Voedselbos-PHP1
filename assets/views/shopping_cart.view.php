<div class="container">
  <div id="shopping_cart_view"></div>
	<div class="row">

    <?php foreach($items as $item) : ?>
		

    

<div id=shopping_cart class="card" style="width: 18rem;">
  <img src="<?= $_ENV['IMAGE_PATH'] . $item['image']?>"  class="card-img-top" alt= "<?= $item['title']?>">
  <div class="card-body">
    <h5 class="card-title"><?= $item['title'] ?></h5>
    <p class="card-text">Prijs: €  <?= $item['price'] ?></p>
    <a href="#" class="btn btn-primary">Verwijder</a>
  </div>
</div>

    <?php endforeach; ?>

		
	</div>
</div>





