
<!-- start nav-bar -->
<nav class="container">
			<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand fs-2 text-white" href="<?php echo "index.php" ?>">{{ appName }}</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">

							<li class="nav-item">
								<a class="nav-link active text-white fs-2" aria-current="page"
									href="<?php echo "index.php?page=items#allItems"?>" >Producten</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white fs-2" href="<?php echo "index.php?page2=about#about-container"?>" id="navbarDropdown"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">Informatie
								</a>

								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Onze werkwijze</a></li>
									<li><a class="dropdown-item" href="#">Vrijwilliger worden?</a>
									</li>
									
								</ul>

							</li>
						</ul>

						<form class="d-flex">
							
						<button class="btn btn-light">Login</button>
							<button class="btn btn-light">Registreer</button>

							<span id="basket">
								<i @click="toggleCart" class="btn btn-light bi bi-basket"></i>

							</span>
							
						
						</form>
						
					</div>
				</div>
			</nav>
		</nav>
		<!-- end navbar -->

        
