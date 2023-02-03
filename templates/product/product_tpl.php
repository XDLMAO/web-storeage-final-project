<div class="title-main">
    <span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span>
    <p class="line"></p>
</div>
<div class="gr-pro d-flex justify-content-start align-items-center flex-wrap">
    <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
        <div class="item-pro">
			<a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
				<p class="pic-product scale-img">
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
    <?php } } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>