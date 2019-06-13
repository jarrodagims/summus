<div class="v-align">
    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('md');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
$sm->setStyle('circle');
?>
    <ul class="nav navbar-nav">
        <li><a href="#espanol">ESPAÑOL</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a
                href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">TEL:
                <?php printPhone();?></a></li>
    </ul>
</div>