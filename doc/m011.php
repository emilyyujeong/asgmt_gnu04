<?
$cate_num = 1;
$cate_title = '회사소개';
$page_num = 1;
$page_title = '기업개요';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>


<div class="content">
                        <div class="pic">
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/sub_01.gif" alt="">
                                </figure>
                            </div>

                            <strong>쌍용건설의 작품이 많아질수록</strong>
                            <span> 세상은 더욱 아름다워집니다.</span>
                            <p> 대한민국 밖에서 더 큰 대한민국을 세워온 쌍용건설,</p>
                            <p>명품건설의 역사를 다시 쓰고 있는 쌍용건설의 작품이 늘어날 때마다</p>
                            <p>세상은 더 아름다워집니다. 미래는 더 풍요로워집니다.</p>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>