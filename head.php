<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
<header class="header">
            <!-- <div class="top_banner">
                <div class="inner">
                    <div class="left">
                        <div class="lang">
                            <a href=""><img src="<?= G5_THEME_URL ?>/img/kor.jpg" alt=""> kor</a>
                            <a href=""><img src="<?= G5_THEME_URL ?>/img/eng.jpg" alt=""> eng</a>
                        </div>
                    </div>
                    <ul class=" top_link">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/">SITE MAP</a></li>
                        <li><a href="/bbs/board.php?bo_table=nos">CONTACT US</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="head_container">
                <div class="inner">
                    <h1>
                        <a href="/">
                            <img src="<?= G5_THEME_URL ?>/img/logo.png" alt="">
                        </a>
                    </h1>
                    <nav class="gnb">
                        <ul>
                        <!-- 아래꺼 
                            <?
                            for ($i=0; $i<count($as_nav); $i++) {
                                echo '<li><a href="">'.$as_nav[$i].'</a>';
                                include G5_THEME_PATH.'/doc/nav0'.($i+1).'.php';
                                echo '</li>';
                            }
                        ?> -->
                            <li><? include G5_THEME_PATH.'/doc/nav01.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav02.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav03.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav04.php';?></li>
                            <li>
                                <a href=""><i class="xi-bars"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        
<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.head.php'; // 서브페이지 헤드
}
?>
