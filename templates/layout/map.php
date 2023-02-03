
<div class="footer_map_tab">
    <?php if(isset($chinhanh_nb) && count($chinhanh_nb) > 0) { ?>
        <div class="wrap_chinhanh">
            <div class="wrap-content">
                <div class="flex_chinhanh">
                    <?php for($c=0;$c<count($chinhanh_nb);$c++) { ?>
                        <div class="chinhanh_items<?=($c==0)?" active":""?>" data-map="<?=$chinhanh_nb[$c]['id']?>" title="<?=$chinhanh_nb[$c]['name'.$lang]?>">
                            <?=$chinhanh_nb[$c]['name'.$lang]?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="chinhanh_frame">
        <?=htmlspecialchars_decode($optsetting['coords_iframe'])?>
    </div>
</div>
