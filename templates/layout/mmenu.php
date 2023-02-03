<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword-res');"/>
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
        <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href="" title="Trang Chủ">Trang Chủ</a></li>
            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="Giới Thiệu">Giới Thiệu</a></li>
            <li><a class="has-child  <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham" title="Sản Phẩm">Sản Phẩm</a>
                <ul>
                    <?php foreach($splist as $klist => $vlist) {
                        $ttcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                        <li>
                            <a class="has-child transition" title="<?=$vlist['name'.$lang]?>" href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                            <?php if(!empty($ttcat)) { ?>
                                <ul>
                                    <?php foreach($ttcat as $kcat => $vcat) {
                                        $ttitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                                        <li>
                                            <a class="has-child transition" title="<?=$vcat['name'.$lang]?>" href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                            <?php if(!empty($ttitem)) { ?>
                                                <ul>
                                                    <?php foreach($ttitem as $kitem => $vitem) {
                                                        $ttsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc",array($vitem['id'])); ?>
                                                        <li>
                                                            <a class="has-child transition" title="<?=$vitem['name'.$lang]?>" href="<?=$vitem[$sluglang]?>"><?=$vitem['name'.$lang]?></a>
                                                            <?php if(!empty($ttsub)) { ?>
                                                                <ul>
                                                                    <?php foreach($ttsub as $ksub => $vsub) { ?>
                                                                        <li>
                                                                            <a class="transition" title="<?=$vsub['name'.$lang]?>" href="<?=$vsub[$sluglang]?>"><?=$vsub['name'.$lang]?></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <li><a class="<?php if($com=='huong-dan') echo 'active'; ?> transition" href="huong-dan" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>
            <li><a class="<?php if($com=='chinh-sach') echo 'active'; ?> transition" href="chinh-sach" title="Chính sách mua hàng">Chính sách mua hàng</a></li>
            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he" title="Liên Hệ">Liên Hệ</a></li>
            
            
        </ul>
    </nav>
</div>