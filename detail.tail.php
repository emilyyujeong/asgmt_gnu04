
        <script>
        $(function(){
            var num = <?= $page_num ?>;
            $('.aside_menu ul>li').eq(num-1).addClass('on');
        })
        </script>



                        </div>
                    </article>

                    <aside class="aside">
                        <div class="aside_menu">
                          <? include G5_THEME_PATH.'/doc/nav0'.$cate_num.'.php';?>
                        </div>
                       
                    </aside>
                </div>
            </div>

