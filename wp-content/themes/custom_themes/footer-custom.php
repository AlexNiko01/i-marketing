<section class="ss-follow-us">
    <div class="ss-container">
        <h2 class="text-center ss-title">
            <?php echo __('Следите за нашими новостями', 'custom_themes') ?>
        </h2>
        <div class="ss-follow-us__list">
            <div class="ss-follow-us__social">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/imarketing.ua/&amp;width=1050&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
                        scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:214px;"
                        allowTransparency="true"></iframe>
            </div>
            <div class="ss-follow-us__social">
                <img src="<?php echo get_template_directory_uri() ?>/img/telegram2.png" alt="">
                <?php echo __('Подпишись на наш', 'custom_themes') ?>
                <br>
                <?php echo __('канал в', 'custom_themes') ?>
                <a href="https://telegram.im/@imarketingua"
                   target="_blank"><?php echo __('telegram', 'custom_themes') ?></a>
            </div>
        </div>
    </div>
</section>


<section class="ss-partners">
    <div class="ss-container ss-container--small">
        <h2 class="ss-title"><?php echo __('Партнеры', 'custom_themes') ?></h2>
        <div class="ss-partners__list">
            <?php query_posts($query_string . 'cat=9&showposts=-1'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="ss-partners__item">
                    <a href="#"><?php the_post_thumbnail(); ?></a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query() ?>
        </div><!-- div.footer_top end -->
    </div>
</section>

<footer class="ss-footer">
    <div class="ss-footer__wrap ss-blue-grad-bc">

        <div class="ss-container">
            <div class="ss-footer__call_us">

     <span class="call_us">Позвоните нам:
         <a href="tel:+380 (44) 361-18-16">
             (044) 361 1816
         </a>
         <a href="tel:+380 (50) 207 36-73">
             (050) 207 3673
         </a>
         <a href="tel:+380 (97) 214-79-15">
             (097) 214 7915
         </a>
     </span>
            </div>

            <nav class="ss-footer__nav">

                <?php
                $defaults = array(
                    'theme_location' => '',
                    'menu' => 'main',
                    'container' => 'nav',
                    'container_class' => 'main_menu',
                    'items_wrap' => '<ul>%3$s</ul>'
                );

                wp_nav_menu($defaults);
                ?>
            </nav>
        </div>
    </div>
    <div class="ss-footer__bottom"></div>
</footer>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter17578525 = new Ya.Metrika({
                    id: 17578525,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/17578525" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
