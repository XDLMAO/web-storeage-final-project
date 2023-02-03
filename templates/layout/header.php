<div class="header">
	<div class="wrap-content d-flex align-items-center justify-content-between">
		<a class="logo-header" href="">
			<?=$func->getImage([ 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
		</a>
		<div class="search-pc">
			<div class="search w-clear">
				<input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
				<p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
			</div>
		</div>
		<a class="hotline-header d-flex align-items-center justify-content-between">
			<img class="shake-anim" src="assets/images/img-design/phone.png" alt="phone">
			<div class="hotline">
				<span><?=$optsetting['hotline']?></span><br>
				<span><?=$optsetting['phone']?></span>
			</div>
		</a>
		<?php if(array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
			<div class="user-header d-flex flex-column">
				<a href="account/thong-tin">
					<span>Hi, <?=$_SESSION[$loginMember]['username']?></span>
				</a>
				<a href="account/lich-su">
					<span>Lịch sử đơn hàng</span>
				</a>
				<a href="account/dang-xuat">
					<i class="fas fa-sign-out-alt"></i>
					<span><?=dangxuat?></span>
				</a>
			</div>
		<?php } else { ?>
			<div class="user-header d-flex flex-column">
				<a href="account/dang-nhap">
					<i class="fas fa-sign-in-alt"></i>
					<span><?=dangnhap?></span>
				</a>
				<a href="account/dang-ky">
					<i class="fas fa-user-plus"></i>
					<span><?=dangky?></span>
				</a>
			</div>
		<?php } ?>
	</div>
</div>