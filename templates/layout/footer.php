<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-md-12 mgb-res">
                    <h2 class="footer-title">Thông tin liên hệ</h2>
                    <div class="footer-name"><?=$footer['name'.$lang]?></div>
                    <div class="footer-info"><?=htmlspecialchars_decode($footer['content'.$lang])?></div>
                    <ul class="social social-footer list-unstyled p-0 m-0 d-flex align-items-center justify-content-start flex-wrap">
                        <?php foreach($social2 as $k => $v) { ?>
                            <li class="d-inline-block align-top mr-1 hvr-float-shadow">
                                <a href="<?=$v['link']?>" target="_blank">
                                    <?=$func->getImage(['sizes' => '48x48x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        
        <div class="wrap-content">
            <div class="row">
                <div class="footer-copyright col-md-6">Copyright © By</div>
                <div class="footer-statistic col-md-6">
                    <span><?=dangonline?>: <?=$online?></span><span>|</span>
                    <span><?=tongtruycap?>: <?=$counter['total']?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  if($com!='gio-hang') { ?>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?=(!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
    </a>
<?php }  ?>