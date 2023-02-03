<?php 
    $order_his = $cache->get("select * FROM #_order  where id_user = ?  order by numb,id desc", array($_SESSION[$loginMember]['id']), 'result', 7200);
?>
<div class="wrap-order">
    <div class="title-user">
        <span>Lịch sử mua hàng</span>
    </div>
    <?php if ($order_his) {?>
        <div class="gr-order ">
            <div class="gr-tit d-flex justify-content-between align-items-center">
                <div class="tit-order">Mã đơn hàng</div>
                <div class="tit-order">Họ tên</div>
                <div class="tit-order">Ngày đặt</div>
                <div class="tit-order">Hình thức thanh toán</div>
                <div class="tit-order">Tổng giá</div>
                <div class="tit-order">Tình trạng</div>
            </div>
            <?php foreach ($order_his as $ko => $vo) {
                $httt = $cache->get("select name$lang from #_news where id = ?  ", array($vo['order_payment']), 'result', 7200);
                $status = $cache->get("select name$lang  from #_order_status where id = ? ", array($vo['order_status']), 'result', 7200);
                ?>
                <div class="gr-info d-flex justify-content-between align-items-center">
                    <div class="order-info"><?=$vo['code']?></div>
                    <div class="order-info"><?=$vo['fullname']?></div>
                    <div class="order-info"><?=date("d/m/Y h:i A",$vo['date_created'])?></div>
                    <div class="order-info"><?=$httt[0]['name'.$lang]?></div>
                    <div class="order-info"><?=$func->formatMoney($vo['total_price'])?></div>
                    <div class="order-info"><?=$status[0]['name'.$lang]?></div>
                </div>
            <?php }?>
        </div>
    <?php } else { ?>
        <a href="" class="empty-cart text-decoration-none w-100">
            <i class="fa fa-cart-arrow-down"></i>
            <p>Chưa đặt đơn hàng nào!</p>
            <span><?=vetrangchu?></span>
        </a>
   <?php }?>
</div>