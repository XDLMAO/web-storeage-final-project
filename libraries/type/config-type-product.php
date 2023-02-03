<?php
    /* Sản phẩm */
    $nametype = "san-pham";
    $config['product'][$nametype]['title_main'] = "Sản Phẩm";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = false;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['comment'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh sản phẩm",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => false,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 358,
            "height_photo" => 358,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        )
    );
    $config['product'][$nametype]['code'] = false;
    $config['product'][$nametype]['brand'] = false;
    $config['product'][$nametype]['regular_price'] = true;
    $config['product'][$nametype]['sale_price'] = true;
    $config['product'][$nametype]['discount'] = true;
    $config['product'][$nametype]['desc'] = true;
    $config['product'][$nametype]['desc_cke'] = true;
    $config['product'][$nametype]['content'] = true;
    $config['product'][$nametype]['content_cke'] = true;
    $config['product'][$nametype]['schema'] = true;
    $config['product'][$nametype]['guarantee'] = false;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 358;
    $config['product'][$nametype]['height'] = 358;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';


    /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['images_list'] = false;
    $config['product'][$nametype]['images2_list'] = false;
    $config['product'][$nametype]['show_images_list'] = false;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array("hienthi" => "Hiển thị");
    $config['product'][$nametype]['desc_list'] = false;
    $config['product'][$nametype]['seo_list'] = false;
    $config['product'][$nametype]['width_list'] = 300;
    $config['product'][$nametype]['height_list'] = 230;
    $config['product'][$nametype]['width2_list'] = 38;
    $config['product'][$nametype]['height2_list'] = 37;
    $config['product'][$nametype]['thumb_list'] = '100x100x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

?>