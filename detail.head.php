
<?
        if($board['bo_table'] == 'pds') {
            $cate_num = 3;
            $page_num = 1;
            $cate_title = '혁신기술';
            $page_title = '기술연구소';
        } else if($board['bo_table'] == 'nbbs') {
            $cate_num = 4;
            $page_num = 1;
            $cate_title = '홍보센터';
            $page_title = '최신뉴스';
        } else if($board['bo_table'] == 'nos') {
            $cate_num = 4;
            $page_num = 2;
            $cate_title = '홍보센터';
            $page_title = '사회공헌';
        } 
?>



        <div id="sub">
            <div class="sub_banner bg0<?= $cate_num ?>" style="background-image:url(<?= G5_THEME_URL ?>/img/bg0<?= $cate_num ?>.jpg)">
                <div class="inner">
                    <strong><?= $cate_title ?></strong>
                    <span><?= $cate_description ?></span>
                </div>
            </div>

            <div class="sub_page">
                <div class="inner">
                    <ul>
                        <li><?= $cate_title ?></li>
                        <li><?= $page_title ?></li>
                    </ul>
                </div>
            </div>

            <div class="sub_container">
                <div class="inner">
                    <article class="article">
                        <h3><?= $page_title ?> <span> /<?= $cate_title ?></span></h3>
                        <div class="content">



