<div class="wrap-pronb padding50">
	<div class="wrap-content">
		<div class="title-main">
			<span class="tit">Sản Phẩm nổi bật</span>
			<p class="slogan"><?=$slogan1['name'.$lang]?></p>
		</div>
		<div class="gr-pro d-flex justify-content-start align-items-center flex-wrap">
			<?php foreach ($pronb as $k => $v) {?>
				<div class="item-pro">
					<a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
						<p class="pic-product hover_sang2">
							<?=$func->getImage(['sizes' => '358x358x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
						</p>
						<div class="product-info">
							<span class="name-product text-split"><?=$v['name'.$lang]?></span>
							<p class="price-product">
								<?php if($v['discount']) { ?>
									<span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
									<span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
									<span class="price-per"><?='-'.$v['discount'].'%'?></span>
								<?php } else { ?>
									<span class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
								<?php } ?>
							</p>
						</div>
					</a>
				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php if(count($quangcao)) { ?>
    <div class="slideshow">
        <div class="owl-page owl-carousel owl-theme"
            data-xsm-items = "1:0" 
            data-sm-items = "1:0" 
            data-md-items = "2:10" 
            data-lg-items = "2:15" 
            data-xlg-items = "2:20" 
            data-rewind = "1" 
            data-autoplay = "1" 
            data-loop = "0" 
            data-lazyload = "0" 
            data-mousedrag = "1" 
            data-touchdrag = "1" 
            data-smartspeed = "800" 
            data-autoplayspeed = "800" 
            data-autoplaytimeout = "5000" 
            data-dots = "0" 
            data-animations = "animate__fadeInDown, animate__backInUp, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn" 
            data-nav = "1" 
            data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" 
            data-navcontainer = ".control-slideshow">
            <?php foreach($quangcao as $v) { ?>
                <div class="slideshow-item" owl-item-animation>
                    <a class="slideshow-image" href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '690x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="control-slideshow control-owl transition"></div>
    </div>
                
<?php } ?>
<div class="wrap-product">
	<?php foreach ($splisth as $klist => $vlist) {?>
		<div class="wrap-content padding50">
			<div class="title-main">
				<span class="tit"><?=$vlist['name'.$lang]?></span>
				<p class="slogan"><?=$slogan1['name'.$lang]?></p>
			</div>
			<div class="paging-product-category paging-product-category-<?=$vlist['id']?>" data-list="<?=$vlist['id']?>"> </div>
		</div>
	<?php }?>
</div>