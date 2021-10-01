<?php
$page  = jet_engine()->options_pages->registered_pages['my-resume'];
list($ano,$mes,$dia) = explode("-",'1980-05-21');
$ano_diferencia  = date("Y") - $ano;
$mes_diferencia = date("m") - $mes;
$dia_diferencia   = date("d") - $dia;
$edad = ($dia_diferencia < 0 || $mes_diferencia < 0) ? $ano_diferencia - 1 : $ano_diferencia ;

$postType = getMyPostType('servicios');
?>
<div class="card-inner animated active" id="about-card">
	<div class="card-wrap">

		<!-- About -->
		<div class="content about">

			<!-- title -->
			<div class="title">About Me</div>

			<!-- content -->
			<div class="row">
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="text-box">
						<p><?=$page->get( 'descripcion' )?></p>
						
					</div>
				</div>
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="info-list">
						<ul>
							<li><strong>Edad . . . . .</strong> <?=$edad?></li>
							<li><strong>Residencia . . . . .</strong> Perú</li>
							<li><strong>Freelance . . . . .</strong> Available</li>
							<li><strong>Direccion . . . . .</strong> Lima, SJL</li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>

		</div>

		<!--
			Services
		-->
		<div class="content services">

			<!-- title -->
			<div class="title">My Services</div>

			<!-- content -->
			<div class="row service-items border-line-v">
				<?php if ( $postType->have_posts() ) : while ( $postType->have_posts() ) : $postType->the_post();  ?>
					<!-- service item -->
					<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
						<div class="service-item">
							<div class="icon">
								<span class="fa fa-code"></span>
							</div>
							<div class="name">
								<span ><?=the_title()?></span>
							</div>
							<div class="desc">
								<div><?=the_content()?></div>
							</div>
						</div>
					</div>
				<?php endwhile; else : endif; ?>
			</div>
			<div class="clear"></div>

		</div>


	</div>
</div>
