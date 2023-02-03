<?php
    /* Config type - Group */
    $config['group'] = array(
        /*"Group Sản Phẩm" => array(
            "product" => array("san-pham"),
            "tags" => array("san-pham"),
            "static" => array("gioi-thieu-san-pham"),
            "photo" => array("slide-product"),
            "photo_static" => array("watermark"),
            "newsletter" => array("dangkybaogia")
        ),
        "Group Tin Tức" => array(
            "news" => array("tin-tuc", "tuyen-dung"),
            "tags" => array("tin-tuc"),
            "photo_static" => array("watermark-news"),
            "newsletter" => array("dangkytuyendung")
        )*/

        // "Group Ảnh" => array(
        //     "static" => array("thu-vien-anh"),
        //     "photo" => array("thu-vien-anh"),
           
        // )
    );

    /* Config type - Product */
    require_once LIBRARIES.'type/config-type-product.php';

    /* Config type - News */
    require_once LIBRARIES.'type/config-type-news.php';

    /* Config type - Static */
    require_once LIBRARIES.'type/config-type-static.php';

    /* Config type - Photo */
    require_once LIBRARIES.'type/config-type-photo.php';

    /* Setting */
    $config['setting']['phone'] = true;
    $config['setting']['hotline'] = true;

    /* Quản lý tài khoản */
    $config['user']['active'] = true;
    $config['user']['admin'] = false;
    $config['user']['check_admin'] = array("hienthi" => "Kích hoạt");
    $config['user']['member'] = true;
    $config['user']['check_member'] = array("hienthi" => "Kích hoạt");

    /* Quản lý phân quyền */
    $config['permission']['active'] = false;
    $config['permission']['check'] = array("hienthi" => "Kích hoạt");

    /* Quản lý liên lệ */
    $config['contact']['check'] = array("hienthi" => "Xác nhận");

    /* Quản lý địa điểm */
    $config['places']['active'] = false;
    $config['places']['check_city'] = array("hienthi" => "Hiển thị");
    $config['places']['check_district'] = array("hienthi" => "Hiển thị");
    $config['places']['check_ward'] = array("hienthi" => "Hiển thị");
    $config['places']['placesship'] = false;

    /* Quản lý giỏ hàng */
    $config['order']['active'] = true;
    $config['order']['search'] = true;
    $config['order']['thumb'] = '100x100x1';
?>