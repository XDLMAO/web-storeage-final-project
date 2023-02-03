<div class="grid-pro-detail w-clear">
    <div class="row">
        <div class="left-pro-detail col-md-6 col-lg-5 mb-4">
            <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=ASSET.WATERMARK?>/product/760x552x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                <?=$func->getImage(['isLazy' => false, 'sizes' => '716x716x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name'.$lang]])?>
            </a> 
            <?php if($rowDetailPhoto) { if(count($rowDetailPhoto) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <div class="owl-page owl-carousel owl-theme owl-pro-detail"
                        data-xsm-items = "5:10" 
                        data-sm-items = "5:10" 
                        data-md-items = "5:10" 
                        data-lg-items = "5:10" 
                        data-xlg-items = "5:10" 
                        data-nav = "1" 
                        data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" 
                        data-navcontainer = ".control-pro-detail">
                        <div>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/760x552x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                                <?=$func->getImage(['isLazy' => false, 'sizes' => '716x716x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name'.$lang]])?>
                            </a>
                        </div>
                        <?php foreach($rowDetailPhoto as $v) { ?>
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/760x552x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                                    <?=$func->getImage(['isLazy' => false, 'sizes' => '716x716x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name'.$lang]])?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="control-pro-detail control-owl transition"></div>
                </div>
            <?php } } ?>
        </div>

        <div class="right-pro-detail col-md-6 col-lg-7 mb-4">
            <p class="title-pro-detail mb-2"><?=$rowDetail['name'.$lang]?></p>
            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                    $params = array();
                    $params['oaid'] = $optsetting['oaidzalo'];
                    echo $func->markdown('social/share', $params);
                ?>
            </div>
            <div class="desc-pro-detail"><?=(!empty($rowDetail['desc'.$lang])) ? (htmlspecialchars_decode($rowDetail['desc'.$lang])) : ''?></div>
            <ul class="attr-pro-detail">
                <?php if(!empty($rowDetail['code'])) { ?>
                    <li class="w-clear"> 
                        <label class="attr-label-pro-detail"><?=masp?>:</label>
                        <div class="attr-content-pro-detail"><?=$rowDetail['code']?></div>
                    </li>
                <?php } ?>
                <?php if(!empty($productBrand['id'])) { ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?=thuonghieu?>:</label>
                        <div class="attr-content-pro-detail"><a class="text-decoration-none" href="<?=$productBrand[$sluglang]?>" title="<?=$productBrand['name'.$lang]?>"><?=$productBrand['name'.$lang]?></a></div>
                    </li>
                <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?=gia?>:</label>
                    <div class="attr-content-pro-detail">
                        <?php if($rowDetail['sale_price']) { ?>
                            <span class="price-new-pro-detail"><?=$func->formatMoney($rowDetail['sale_price'])?></span>
                            <span class="price-old-pro-detail"><?=$func->formatMoney($rowDetail['regular_price'])?></span>
                        <?php } else { ?>
                            <span class="price-new-pro-detail"><?=($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe?></span>
                        <?php } ?>
                    </div>
                </li>
                <?php if(!empty($rowColor)) { ?>
                    <li class="color-block-pro-detail w-clear">
                        <label class="attr-label-pro-detail d-block"><?=mausac?>:</label>
                        <div class="attr-content-pro-detail d-block">
                            <?php foreach($rowColor as $k => $v) { ?>
                                <?php if($v['type_show']==1) { ?>
                                    <label for="color-pro-detail-<?=$v['id']?>" class="color-pro-detail text-decoration-none" data-idproduct="<?=$rowDetail['id']?>" style="background-image: url(<?=UPLOAD_COLOR_L.$v['photo']?>)">
                                        <input type="radio" value="<?=$v['id']?>" id="color-pro-detail-<?=$v['id']?>" name="color-pro-detail">
                                    </label>
                                <?php } else { ?>
                                    <label for="color-pro-detail-<?=$v['id']?>" class="color-pro-detail text-decoration-none" data-idproduct="<?=$rowDetail['id']?>" style="background-color: #<?=$v['color']?>">
                                        <input type="radio" value="<?=$v['id']?>" id="color-pro-detail-<?=$v['id']?>" name="color-pro-detail">
                                    </label>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                <?php if(!empty($rowSize)) { ?>
                    <li class="size-block-pro-detail w-clear">
                        <label class="attr-label-pro-detail d-block"><?=kichthuoc?>:</label>
                        <div class="attr-content-pro-detail d-block">
                            <?php foreach($rowSize as $k => $v) { ?>
                                <label for="size-pro-detail-<?=$v['id']?>" class="size-pro-detail text-decoration-none">
                                    <input type="radio" value="<?=$v['id']?>" id="size-pro-detail-<?=$v['id']?>" name="size-pro-detail">
                                    <?=$v['name'.$lang]?>
                                </label>
                            <?php } ?>
                        </div> 
                    </li>
                <?php } ?>
                
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail d-block"><?=soluong?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <div class="quantity-pro-detail">
                            <span class="quantity-minus-pro-detail">-</span>
                            <input type="number" class="qty-pro" min="1" value="1" readonly />
                            <span class="quantity-plus-pro-detail">+</span>
                        </div>
                    </div>
                </li>
                
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                    <div class="attr-content-pro-detail"><?=$rowDetail['view']?></div>
                </li>
            </ul>
           
            <div class="cart-pro-detail">
                <a class="btn btn-success addcart rounded-0 mr-2" data-id="<?=$rowDetail['id']?>" data-action="addnow">
                    <i class="fas fa-shopping-bag mr-1"></i>
                    <span>Thêm vào giỏ hàng</span>
                </a>
                <a class="btn btn-dark addcart rounded-0" data-id="<?=$rowDetail['id']?>" data-action="buynow">
                    <i class="fas fa-shopping-bag mr-1"></i>
                    <span>Mua ngay</span>
                </a>
            </div>
           
        </div>
    </div>


    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?=thongtinsanpham?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?=binhluan?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                <?=htmlspecialchars_decode($rowDetail['content'.$lang])?>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>
</div>

<div class="title-main"><span><?=sanphamcungloai?></span><p class="line"></p></div>
<div class="content-main gr-pro d-flex justify-content-start align-items-center flex-wrap">
    <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
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