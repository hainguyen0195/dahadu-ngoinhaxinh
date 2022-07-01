<header>
	<div class="wrap-top call_showin">
		<div class="container">
			<div class='wrap-top-row flex_row'>
				<div class="logo ">
					<a class="logo-header" href=""><img onerror="this.src='<?= THUMBS ?>/150x125x2/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
				</div>
				<div class="wrap-top-right">
					<div class="topone">
						<div class="topone_flex flex_row ">
							<p class="diachi_left"><i class="fas fa-home"></i> Địa chỉ: <?= $optsetting['diachi' . $lang] ?> </p>
							<p class="email_top"><i class="fas fa-envelope"></i> Email: <?= $optsetting['email'] ?></p>
							<p class="hotline_top"><i class="fas fa-phone-alt"></i> Hotline: <?= $optsetting['hotline'] ?></p>
							<div class="mangxahoi_header flex_row">
								<?php foreach ($mangxahoi_header as $key => $value) { ?>
									<a href="<?= $value['link'] ?>" target="_blank"><img src="<?= UPLOAD_PHOTO_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>"></a>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php include TEMPLATE.LAYOUT."menu.php"; ?>
				</div>
			</div>
		</div>
	</div>
</header>
<?php include TEMPLATE.LAYOUT."slide.php"; ?>