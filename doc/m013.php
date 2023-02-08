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
                                            "mapWidth": "800",
                                            "mapHeight": "360"
                                        }).render();
                                    </script>
                                </div>
                                <div class="public">
                                    <h2>대중교통편</h2>
                                </div>


                            </div>


                        </div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>