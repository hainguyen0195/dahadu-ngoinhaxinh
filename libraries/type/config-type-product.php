<?php 
  /* Dự án */
    $nametype = "du-an";
    $config['product'][$nametype]['title_main'] = "Dự án";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = false;
    $config['product'][$nametype]['cat'] = false;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat"=>"Nổi bật");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Album dự án",
            "title_sub_photo" => "Album",
            "number_photo" => 5,
            "images_photo" => true,
            "cart_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 600,
            "height_photo" => 500,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        ),
    );
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 380;
    $config['product'][$nametype]['height'] = 220;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'; 
