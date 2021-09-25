<?php
$page  = jet_engine()->options_pages->registered_pages['my-resume'];
?>
<div class="card-started" id="home-card">

<!--
    Profile
-->
<div class="profile no-photo">

    <!-- profile image -->
    <div class="slide" style="background-image: url(/wp-content/themes/myresume/assets/images/man5_big.jpg);"></div>

    <!-- profile titles -->
    <div class="title"><?=$page->get( 'nombre-corto' )?></div>
    <!--<div class="subtitle">Web Designer</div>-->
    <div class="subtitle subtitle-typed">
        <div class="typing-title">
            <p>Web Designer</p>
            <p>Developer</p>
            <p>Freelancer</p>
            <p>FullStack</p>
            <p>DBA</p>
        </div>
    </div>

    <!-- profile socials -->
    <div class="social">
        <a target="_blank" href="https://twitter.com/luiscamp2003"><span class="fa fa-twitter"></span></a>
        <a target="_blank" href="https://github.com/jorarmarfin/"><span class="fa fa-github"></span></a>
        <a target="_blank" href="https://www.linkedin.com/feed/"><span class="fa fa-linkedin"></span></a>
    </div>
    
    <!-- profile buttons -->
    <div class="lnks">
        <a href="<?=$page->get( 'archivo-pdf' )?>" class="lnk" target="_blank" download>
            <span class="text">Descargar CV </span>
            <span class="ion ion-archive"></span>
        </a>
        <a href="#" class="lnk discover">
            <span class="text">Contactame</span>
            <span class="arrow"></span>
        </a>
    </div>

</div>

</div>
