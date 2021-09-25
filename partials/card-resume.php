<?php 
$Experiencias = getMyPostType('experiencia',getTaxEstructure('tipo-experiencia','slug','experiencia'));
$Educacion = getMyPostType('experiencia',getTaxEstructure('tipo-experiencia','slug','educacion'));
$Designes = getMyPostType('habilidades',getTaxEstructure('tipo-habilidades','slug','diseno'));
$Conocimientos = getMyPostType('habilidades',getTaxEstructure('tipo-habilidades','slug','conocimiento'));
$Codigos = getMyPostType('habilidades',getTaxEstructure('tipo-habilidades','slug','codigo'));
$Habilidades = getMyPostType('habilidades',getTaxEstructure('tipo-habilidades','slug','habilidad'));
?>
<div class="card-inner" id="resume-card">
	<div class="card-wrap">

		<!--
			Resume
		-->
		<div class="content resume">

			<!-- title -->
			<div class="title">Resume</div>

			<!-- content -->
			<div class="row">

				<!-- experience -->
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="resume-title border-line-h">
						<div class="icon"><i class="fa fa-briefcase"></i></div>
						<div class="name">Experiencia</div>
					</div>
					<div class="resume-items">
						<?php if ( $Experiencias->have_posts() ) : while ( $Experiencias->have_posts() ) : $Experiencias->the_post();  ?>
						<?php $classActive = (get_post_meta( get_the_ID(),'destacar',true )) ? 'active' : '' ; ?>
							<div class="resume-item border-line-h <?=$classActive?>">
								<div class="date"><?=get_post_meta( get_the_ID(),'periodo',true )?></div>
								<div class="name"><?=the_title()?></div>
								<div class="company"><?=get_post_meta( get_the_ID(),'institucion',true )?></div>
								<p><?=the_content()?></p>
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>

				<!-- education -->
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="resume-title border-line-h">
						<div class="icon"><i class="fa fa-university"></i></div>
						<div class="name">Educación</div>
					</div>
					<div class="resume-items">
						<?php if ( $Educacion->have_posts() ) : while ( $Educacion->have_posts() ) : $Educacion->the_post();  ?>
						<?php $classActive = (get_post_meta( get_the_ID(),'destacar',true )) ? 'active' : '' ; ?>
							<div class="resume-item border-line-h <?=$classActive?>">
								<div class="date"><?=get_post_meta( get_the_ID(),'periodo',true )?></div>
								<div class="name"><?=the_title()?></div>
								<div class="company"><?=get_post_meta( get_the_ID(),'institucion',true )?></div>
								<p><?=the_content()?></p>
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>

				<div class="clear"></div>
			</div>

		</div>

		<!--
			Skills
		-->
		<div class="content skills">

			<!-- title -->
			<div class="title">My Skills</div>
		
			<!-- content -->
			<div class="row">
			
				<!-- skill item -->
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="skills-list">
						<div class="skill-title border-line-h">
							<div class="icon"><i class="fa fa-paint-brush"></i></div>
							<div class="name">Diseño</div>
						</div>
						<ul>
							<?php if ( $Designes->have_posts() ) : while ( $Designes->have_posts() ) : $Designes->the_post();  ?>
								<li class="border-line-h"> 
									<div class="name"><?=the_title()?></div>
									<div class="progress">
										<div class="percentage" style="width:90%;"></div>
									</div>
								</li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>
				<!-- skill item -->
				<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
					<div class="skills-list list">
						<div class="skill-title border-line-h">
							<div class="icon"><i class="fa fa-list"></i></div>
							<div class="name">Conocimiento</div>
						</div>
						<ul>
							<?php if ( $Conocimientos->have_posts() ) : while ( $Conocimientos->have_posts() ) : $Conocimientos->the_post();  ?>
								<li> 
									<div class="name"><?=the_title()?></div>
								</li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>
				<!-- skill item -->
				<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
					<div class="skills-list circles">
						<div class="skill-title border-line-h">
							<div class="icon"><i class="fa fa-code"></i></div>
							<div class="name">Códigos</div>
						</div>
						<ul>
							<?php if ( $Codigos->have_posts() ) : while ( $Codigos->have_posts() ) : $Codigos->the_post();  ?>
								<li> 
									<div class="name"><?=the_title()?></div>
									<div class="progress p90">
										<span><?=get_post_meta( get_the_ID(),'porcentaje',true )?>%</span>
									<div class="slice"><div class="bar"></div><div class="fill"></div></div></div>
								</li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>

				
				<div class="clear"></div>
			</div>
			
		</div>

	</div>
</div>
