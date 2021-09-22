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
        </div>
    </div>

    <!-- profile socials -->
    <div class="social">
        <a target="_blank" href="https://dribbble.com/"><span class="fa fa-dribbble"></span></a>
        <a target="_blank" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
        <a target="_blank" href="https://github.com/"><span class="fa fa-github"></span></a>
        <a target="_blank" href="https://www.spotify.com/"><span class="fa fa-spotify"></span></a>
        <a target="_blank" href="https://stackoverflow.com/"><span class="fa fa-stack-overflow"></span></a>
    </div>
    
    <!-- profile buttons -->
    <div class="lnks">
        <a href="#" class="lnk">
            <span class="text">Download CV</span>
            <span class="ion ion-archive"></span>
        </a>
        <a href="#" class="lnk discover">
            <span class="text">Contact Me</span>
            <span class="arrow"></span>
        </a>
    </div>

</div>

</div>
