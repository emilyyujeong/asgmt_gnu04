<?
$cate_num = 1;
$cate_title = '회사소개';
$page_num = 3;
$page_title = '찾아오시는 길';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>


<div class="content">
<div class="wayto">
                                <h2>쌍용건설</h2>
                                <div class="contact">
                                    <ul>
                                        <li><span class="bold">주소</span> (우편번호 05510) 서울 송파구 올림픽로 299(신천동)</li>
                                        <li><span class="bold">Tel.</span>02-3433-7111</li>

                                        <li><span class="bold">E-mail.</span>ssyenc@ssyenc.com</li>
                                    </ul>
                                </div>
                                <div class="map">
                                    <!-- * 카카오맵 - 지도퍼가기 -->
                                    <!-- 1. 지도 노드 -->
                                    <div id="daumRoughmapContainer1675843318900"
                                        class="root_daum_roughmap root_daum_roughmap_landing"></div>

                                    <!--
        2. 설치 스크립트
        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
    -->
                                    <script charset="UTF-8" class="daum_roughmap_loader_script"
                                        src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                                    <!-- 3. 실행 스크립트 -->
                                    <script charset="UTF-8">
                                        new daum.roughmap.Lander({
                                            "timestamp": "1675843318900",
                                            "key": "2doox",
                                            "mapWidth": "900",
                                            "mapHeight": "360"
                                        }).render();
                                    </script>
                                </div>
                                <div class="public">
                                    <h2>대중교통편</h2>

                                    <div class="transport_wrap">
                                        <article class="train_wrap">
                                            <h4>지하철</h4>
                                            <div class="">
                                                <dl class="train_8">
                                                    <dt>8호선 잠실역</dt>
                                                    <dd>9번 출구 신천 어린이교통공원 맞은편 쌍용건설 본사</dd>
                                                </dl>
                                                <dl class="train_2">
                                                    <dt>2호선 잠실역</dt>
                                                    <dd>8번 출구 KDB 산업은행 잠실지점에서 좌회전 마이스터 본사</dd>
                                                </dl>
                                            </div>
                                        </article>
                                        <article class="bus_wrap">
                                            <h4>버스</h4>
                                            <div class="">
                                                <dl class="bus01">
                                                    <dt>간선</dt>
                                                    <dd>302, 303, 320, 341, 342</dd>
                                                </dl>
                                                <dl class="bus02">
                                                    <dt>지선</dt>
                                                    <dd>3216, 3313, 3315, 3319, 3413, 3414, 4319</dd>
                                                </dl>
                                                <dl class="bus03">
                                                    <dt>도시</dt>
                                                    <dd>30-1, 30-3, 30-5, 70</dd>
                                                </dl>
                                            </div>
                                        </article>
                                    </div>
                                </div>


                            </div>

                        </div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>