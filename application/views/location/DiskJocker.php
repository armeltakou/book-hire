	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Les DJ les plus connus</div>
					<div class="section_subtitle">Ils animent les meilleurs événements et sont les meilleurs dans leur domaine.</div>
				</div>
			</div>
			<div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('dj/dj2.jpg'); ?>" style="height: 300px;" alt="">
											<div class="tag_featured property_tag"><a href="">Dispoible</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Douala</div>
											<div class="recent_item_title"><a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>">DJ Labastille</a></div>
											<div class="recent_item_price">Description du DJ</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div>
                                                <div class="recent_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                <span>
                                                    <a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>" style="color: white;">Louer maintenant</a>
                                                </span>
                                            </div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('dj/dj2.jpg'); ?>" style="height: 300px;" alt="">
											<div class="tag_offer property_tag"><a href="#">Occupé</a></div>
										</div>
                                        <div class="recent_item_body text-center">
                                            <div class="recent_item_location">Douala</div>
                                            <div class="recent_item_title"><a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>">DJ Labastille</a></div>
                                            <div class="recent_item_price">Description du DJ</div>
                                        </div>
                                        <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                            <div>
                                                <div class="recent_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                <span>
                                                    <a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>" style="color: white;">Louer maintenant</a>
                                                </span>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('dj/dj2.jpg'); ?>" style="height: 300px;" alt="">
											<div class="tag_featured property_tag"><a href="#">Disponible</a></div>
										</div>
                                        <div class="recent_item_body text-center">
                                            <div class="recent_item_location">Douala</div>
                                            <div class="recent_item_title"><a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>">DJ Labastille</a></div>
                                            <div class="recent_item_price">Description du DJ</div>
                                        </div>
                                        <div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
                                            <div>
                                                <div class="recent_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                <span>
                                                    <a href="<?php echo site_url(array('Location','DetailsDiskJocker')) ?>" style="color: white;">Louer maintenant</a>
                                                </span>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>

						</div>

						<div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start" style="margin-top: 50px;">
							<div class="recent_slider_nav recent_slider_prev" style="width: 100px;"><i class="fa fa-chevron-left" aria-hidden="true"></i> Précédent</div>
							<div class="recent_slider_nav recent_slider_next" style="width: 100px;"> Suivant <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div>
					</div>
					<!--div class="button recent_button"><a href="#">Voir +</a></div-->
				</div>
			</div>
		</div>
	</div>

    <script>
        window.onload = function (){
            $('#diskjocker').addClass('active');
        };
    </script>