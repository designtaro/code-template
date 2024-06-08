<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!is_front_page()) {wp_title('|', true, 'right');}bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
	<?php wp_head(); ?>
  </head>
  <body>
    <!-- /* ヘッダー要素*/ -->
    <header>
      <div id="header-pc_wrapper">
        <div class="header-pc_wrapper">
          <div>
            <img class="header-pc_wrapper_img_left" src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="">
            <p class="header-pc_wrapper_left_text">群馬県渋川市渋川1771-8 (川島内科クリニック様 隣)</p>
          </div>
          <div>
            <img class="header-pc_wrapper_img_right" src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/yoyaku02.png" alt="">
          </div>  
        </div>
      </div>

      <!-- PCナビゲーション -->
      <div class="nav-wrapper_hover"></div>
            <ul class="nav-wrapper-pc">
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/" >ホーム</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/greeting/" >ごあいさつ</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/features/" >5つの特徴</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/bodycare/" >整体</a></li>
                <li class="nav-wrapper_list">
                    <a href="https://shibukawa-massage-happy.com/facecare/" >小顔整体</a>
                    <!-- <ul class="nav-wrapper_list02" >
                        <li class="nav-wrapper_list01"><a class="nav-wrapper_link_text" href="https://shibukawa-massage-happy.com/pitching/">投球障害 予防コース</a></li>
                        <li class="nav-wrapper_list01 nav-wrapper_list01_text"><a class="nav-wrapper_link_text" href="https://shibukawa-massage-happy.com/care/">野球ケアコース</a></li>
                        <li class="nav-wrapper_list01"><a class="nav-wrapper_link_text" href="https://shibukawa-massage-happy.com/relaxation/">リラクゼーションコース</a></li>
                    </ul> -->
                </li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/maps/" >アクセス・駐車場</a></li>
                <!-- <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="https://shibukawa-massage-happy.com/reservation1/" >ネット予約</a></li> -->
            </ul>
        <!-- PCナビゲーション終了-->










      <!-- スクロールした後に出るメニュー PC-->
      <section class="scroll-header" id="js-header">
        <div class="scroll-header_section">
          <div class="scroll-header_wrapper_left">
            <img class="scroll-header_img" src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="">
            <p class="scroll-header_text">渋川市の整体院 TEL 0279-30-1184</p><p class="scroll-header_text">群馬県渋川市渋川1771-8(川島内科クリニック様 隣)</p>
          </div>
          <div class="scroll-header_wrapper_right" style="text-align: center;">
            <img class="scroll-header_wrapper_right_img" src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/yoyaku01.png" alt="">
            <ul class="scroll-header_list_wrapper scroll-header_list_wrapper01" id="js-header_wrapper">
              <li><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/">ホーム</a></li><span class="scroll-header_list_span" id="scroll-header_list_span01"></span>
              <li><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/greeting/">ごあいさつ</a></li><span class="scroll-header_list_span" id="scroll-header_list_span02"></span>
              <li><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/features/">当院の5つの特徴</a></li><span class="scroll-header_list_span" id="scroll-header_list_span03"></span>
              <li><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/maps/">アクセス・駐車場</a></li>
            </ul>
            <ul class="scroll-header_list_wrapper" id="js-header_wrapper01">
              <li style="margin-left: -25px;"><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/bodycare/">整体</a></li>
              <li style="margin-left: -55px;"><a class="scroll-header_list" href="https://shibukawa-massage-happy.com/facecare/">小顔整体</a></li>
              <li style="margin-right: -155px; position:relative;">
                <a class="scroll-header_list scroll-header_list__hover" style="cursor: default;" href="#">ネット予約</a>
                <span style="position:absolute; top:12px; left:-55px; white-space: nowrap;cursor: default;">整備中の為、お電話でのご予約をお願い致します</span>
              </li>
              <li></li>
            </ul>
          </div>
        </div>
      </section>



    <!-- スマートフォンメニュー -->
      <img src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="" id="sp-img">
      <!-- ハンバーガーメニュー -->
      <input type="checkbox" class="check" id="checked">
          <label class="menu-btn" for="checked">
            <div class="ll">
              <span class="bar top"></span>
              <span class="bar middle"></span>
              <span class="bar bottom"></span>
              <span class="menu-btn__text">MENU</span>
            </div>
          </label>
      <label class="close-menu" for="checked"></label>
      <nav class="drawer-menu">
      <section class="navMenu">
        <ul>
          <li><a href="https://shibukawa-massage-happy.com/">&nbsp;&nbsp;ホーム ><br><span class="span">Home</span></a></li>
          <li><a href="https://shibukawa-massage-happy.com/greeting/">&nbsp;ごあいさつ ><br><span class="span">Greeting</span></a></li>
          <li><a href="https://shibukawa-massage-happy.com/features/">&nbsp;当院の5つの特徴 ><br><span class="span">features</span></a></li>
          <li><a href="https://shibukawa-massage-happy.com/bodycare/">&nbsp;整体 ><br><span class="span">Body care</span></a></li>
          <li><a href="https://shibukawa-massage-happy.com/facecare/">&nbsp;小顔整体 ><br><span class="span">face care</span></a></li>
          <li><a href="https://shibukawa-massage-happy.com/maps/">&nbsp;アクセス・駐車場 ><br><span class="span">access</span></a></li>
          <li><a style="cursor: default;" href="#">&nbsp;ネット予約 ><br><span class="span" style="color: initial;">整備中の為、お電話でのご予約をお願い致します</span></a></li>
        </ul>
        <div class="drawer-menu-sns">
          <a href="https://instagram.com/maeno.seitai.happy?utm_medium=copy_link">
            <img src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/insta.png" alt="">
          </a>
        </div>
      </section>
	</nav>
  <!-- スマートフォンメニュー終了 -->

    </header>
    <!-- /* ヘッダー要素*/ -->