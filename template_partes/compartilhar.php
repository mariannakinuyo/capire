<?php function componente_compartilhar() { ?>

<div class="social">
    <a addthis:url="<?php echo $link ?>" class="addthis_button_facebook facebook" title="compartilhar-facebook" href="#">
        <span></span>
    </a>
    <!-- <a addthis:url="<?php echo $link ?>" class="addthis_button_instagram instagram" title="compartilhar-instagram" href="#">
        <span></span>
    </a> -->
    <a addthis:url="<?php echo $link ?>" class="addthis_button_twitter twitter" title="compartilhar-twitter" href="#">
        <span></span>
    </a>
    <a addthis:url="<?php echo $link ?>" class="addthis_button_whatsapp whatsapp" title="compartilhar-whatsapp" href="#">
        <span></span>
    </a>
    <a addthis:url="<?php echo $link ?>" class="addthis_button_telegram telegram" title="compartilhar-telegram" href="#">
        <span></span>
    </a>
</div>


<?php
}
