<?php if (count($slider)) { ?>
    <section class="gv_banner_block slider clearfix">
        <div class="inner">
            <div class="owl-carousel Owl-slider ">
                <?php foreach ($slider as $k => $v) { ?>
                    <div class="slide_item">
                        <div class="bg" style="background-image: url(<?= UPLOAD_PHOTO_L . $v['photo'] ?>);"></div>

                        <div class="box_wrap">
                            <div class="container ">
                                <div class="caption flex_row">
                                    <div class="cap_inner">
                                        <h2 class="title title_animate"><?= $v['ten' . $lang] ?></h2>
                                        <h4 class="title title_animate"><?= $v['text'] ?></h4>
                                        <p class="des-slider"><?= $v['mota' . $lang] ?></p>
                                        <a target="_blank" href="<?= $v['link'] ?>" class="btl title_animate arrow">
                                           <i class="fas fa-paper-plane"></i> Liên Hệ Ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>