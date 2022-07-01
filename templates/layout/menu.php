<div class="menu call_showin">
        <div class="row-menu flex_row">
         <ul class="flex_row " id="main-nav">
            <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><?=trangchu?></a></li>

            <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li>
                <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="<?= dichvu ?>"><?= dichvu ?></a>
                <?php if(count($dvlistmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($dvlistmenu); $i++) {
                            $dvcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_news where id_list = ? and hienthi > 0 order by stt,id desc",array($dvlistmenu[$i]['id'])); ?>
                            <li>
                                <a class="transition" title="<?=$dvlistmenu[$i]['ten'.$lang]?>" href="<?=$dvlistmenu[$i][$sluglang]?>"><?=$dvlistmenu[$i]['ten'.$lang]?></a>
                                <?php if(count($dvcatmenu)>0) { ?>
                                    <ul class="<?= count($dvcatmenu)>6 ? 'ul_scroll':'' ?>">
                                        <?php for($j=0;$j<count($dvcatmenu);$j++) { ?>
                                            <li>
                                                <a class="transition" title="<?=$dvcatmenu[$j]['ten'.$lang]?>" href="<?=$dvcatmenu[$j][$sluglang]?>"><?=$dvcatmenu[$j]['ten'.$lang]?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>

            <li>
                <a class="transition <?php if($com=='du-an') echo 'active'; ?>" href="du-an" title="Dự án">Dự án</a>
            </li>
          
            <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
            </li>

            <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>

        </ul>
        <div class="search">
            <input type="text" id="keyword" placeholder="Bạn cần tìm gì ?" onkeypress="doEnter(event,'keyword');" value="<?=(isset($tukhoa) && $tukhoa != '') ? $tukhoa : ''?>"/>
            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
        </div>
    </div>
</div>