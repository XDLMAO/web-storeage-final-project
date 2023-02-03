<!-- Css Files -->
<?php
    $css->set("css/animate.min.css");
    $css->set("bootstrap/bootstrap.css");
    $css->set("fontawesome512/all.css");
    $css->set("confirm/confirm.css");
    $css->set("holdon/HoldOn.css");
    $css->set("holdon/HoldOn-style.css");
    $css->set("mmenu/mmenu.css");
    $css->set("fancybox3/jquery.fancybox.css");
    $css->set("fancybox3/jquery.fancybox.style.css");
    $css->set("css/account.css");
    $css->set("css/cart.css");
    $css->set("photobox/photobox.css");
    $css->set("slick/slick.css");
    $css->set("slick/slick-theme.css");
    $css->set("slick/slick-style.css");
    $css->set("fotorama/fotorama.css");
    $css->set("fotorama/fotorama-style.css");
    $css->set("magiczoomplus/magiczoomplus.css");
    $css->set("datetimepicker/jquery.datetimepicker.css");
    $css->set("owlcarousel2/owl.carousel.css");
    $css->set("owlcarousel2/owl.theme.default.css");
    $css->set("simplenotify/simple-notify.css");
    $css->set("fileuploader/font-fileuploader.css");
    $css->set("fileuploader/jquery.fileuploader.min.css");
    $css->set("fileuploader/jquery.fileuploader-theme-dragdrop.css");
    $css->set("comment/comment.css");
    $css->set("css/fonts.css");
    $css->set("css/css_effect.css");
    $css->set("css/style.css");
    echo $css->get();
?>

<!-- Js Google Analytic -->
<?=htmlspecialchars_decode($setting['analytics'])?>

<!-- Js Head -->
<?=htmlspecialchars_decode($setting['headjs'])?>