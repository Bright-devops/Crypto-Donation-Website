<?php include('./includes/header.php'); ?>

			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/gallery.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/gallery.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Charity</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Aljaazera Charity Network</span>
										<h1 class="promo-primary__title"><span>Gallery</span> <span>Masonry</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- gallery start-->
				<section class="section gallery">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- filter panel start-->
								<ul class="filter-panel">
									<li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All Causes</span></li>
									<li class="filter-panel__item" data-filter=".category_1"><span>Water Delivery</span></li>
									<li class="filter-panel__item" data-filter=".category_2"><span>Medicine</span></li>
									<li class="filter-panel__item" data-filter=".category_3"><span>Education</span></li>
									<li class="filter-panel__item" data-filter=".category_4"><span>Food</span></li>
								</ul>
								<!-- filter panel end-->
							</div>
						</div>
					</div>
					<div class="row no-gutters gallery-masonry">
						<div class="col-6 col-md-4 gallery-masonry__item category_1"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_1.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_1.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_1"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_2.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_2.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_3.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_3.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_4.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_4.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-8 gallery-masonry__item category_3"><a class="gallery-masonry__img gallery-masonry__item--height-1" href="img/gallery_5.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_5.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_3"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_6.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_6.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-8 gallery-masonry__item category_4"><a class="gallery-masonry__img gallery-masonry__item--height-3" href="img/gallery_7.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_7.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_4"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery"><img class="img--bg" src="img/gallery_8.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">We need Your Donation</h6></a></div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12 text-center"><a class="button gallery__button button--blue" href="donate.php">Contribute to our Mission</a></div>
						</div>
					</div>
				</section>
				<!-- gallery end-->
				
			</main>
			<?php include('./includes/footer.php'); ?>