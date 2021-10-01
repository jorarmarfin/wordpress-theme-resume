<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map2" id="map2"></div>
								<div class="info-list">
									<ul>
										<li><strong>Address . . . . .</strong> Perú, Lima</li>
										<li><strong>Email . . . . .</strong> luis.mayta@gmail.com</li>
										<li><strong>Freelance . . . . .</strong> Available</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Contact Form
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Contact Form</div>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- content -->
						<p><?=the_content()?></p>
						<?php endwhile; endif; ?>

					</div>

				</div>
			</div>
