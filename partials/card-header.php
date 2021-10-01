
<?php
$page  = jet_engine()->options_pages->registered_pages['my-resume'];
?>
<header class="header">

<!-- header profile -->
<div class="profile">
    <div class="title"><?=$page->get( 'nombre-corto' )?></div>
    <div class="subtitle subtitle-typed">
        <div class="typing-title">
            <?php 
                foreach ($page->get( 'perfiles') as $key => $item) {
                    echo '<p>'.$item['perfil'].'</p>';
                }
            ?>        
        </div>
    </div>
</div>

<!-- menu btn -->
<!--<a href="#" class="menu-btn"><span></span></a>-->

<!-- menu -->
<div class="top-menu">
    <ul>
        <li class="active">
            <a href="#about-card">
                <span class="icon ion-person"></span>
                <span class="link">About</span>
            </a>
        </li>
        <li>
            <a href="#resume-card">
                <span class="icon ion-android-list"></span>
                <span class="link">Resume</span>
            </a>
        </li>
        <!-- <li>
            <a href="#works-card">
                <span class="icon ion-paintbrush"></span>
                <span class="link">Works</span>
            </a>
        </li> -->
        <li>
            <a href="#contacts-card">
                <span class="icon ion-at"></span>
                <span class="link">Contact</span>
            </a>
        </li>
    </ul>
</div>

</header>
