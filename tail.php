<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.tail.php'; // 서브페이지 푸터
}
?>
<footer class="footer">
        <div class="f_inner">
            <div class="top">
                <img src="<?= G5_THEME_URL ?>//img/f_logo.gif" alt="">
                <ul>
                    <li>회사소개</li>
                    <li>개인정보처리방침</li>
                    <li>이메일무단수집거부</li>
                </ul>

            </div>
            <div class="bottom">
                <ul class="right">
                    <li>우편번호 05510 서울 송파구 올림픽로 299(신천동)</li>
                    <li>전화 : 02-3433-7114</li>
                    <li>팩스 : 02-3433-7111</li>
                    <div class="copy">
                        COPYRIGHT &copy; 2017 BY SSANGYONG ENGINEERING & CONSTRUCTION CO., LTD.All Rights Reserved.
                    </div>
                </ul>


                <div class="left">
                    <div class="sns">
                        <i class="xi-instagram"></i>
                        <i class="xi-facebook"></i>
                        <i class="xi-youtube-play"></i>
                    </div>
                </div>
            </div>



        </div>
    </footer>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");