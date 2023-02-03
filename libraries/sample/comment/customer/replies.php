<?php if(!empty($params['replies'])) { foreach($params['replies'] as $v_reply) { ?>
	<div class="comment-replies-item">
		<div class="comment-replies-letter <?=$v_reply['poster']?>"><?=$this->subName($v_reply['fullname'])?></div>
		<div class="comment-replies-info">
			<div class="comment-replies-name mb-1"><?=$v_reply['fullname']?><span class="font-weight-normal small text-muted pl-2"><?=$this->timeAgo($v_reply['date_posted'])?></span><?=($v_reply['poster'] == 'admin') ? '<span class="font-weight-normal text-dark ml-2 qtv badge badge-warning p-1">Quản trị viên</span>' : ''?></div>
			<div class="comment-replies-content"><?=nl2br(htmlspecialchars_decode($v_reply['content']))?></div>
		</div>
	</div>
<?php } } ?>