

<?php if(!empty($static)) { ?>
    <div class="title-main"><span><?=$static['name'.$lang]?></span></div>
    <div class="content-main w-clear"><?=(!empty($static['content'.$lang])) ? htmlspecialchars_decode($static['content'.$lang]) : ''?></div>
   
   
   
    <?php

    if ($com == "thu-vien-anh") {?>
    <div class="content-main album-gallery form-row w-clear">
      <?php  
       $thuvienanh = $cache->get("select name$lang,desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('thu-vien-anh'), 'result', 7200);
      if(!empty($thuvienanh)) { foreach($thuvienanh as $k => $v) { ?>
            <div class="album col-6 col-md-4 col-lg-3 col-xl-3">
            <a class="album-home-image scale-img mb-0" rel="album-<?=$v['id']?>" href="<?=ASSET.UPLOAD_PHOTO_L.$v['photo']?>" title="<?=$v['name'.$lang]?>">
						<?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '480x360x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                </a>
            </div>

        <?php } }  } 
        
        ?>
        </div>
    
    
    
    <div class="share">
    	<b><?=chiase?>:</b>
    	<div class="social-plugin w-clear">
            <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
            ?>
        </div>
    </div>
<?php } else { ?>
    <div class="alert alert-warning w-100" role="alert">
        <strong><?=dangcapnhatdulieu?></strong>
    </div>

<?php } ?>
