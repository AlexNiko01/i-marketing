<?php if(is_single()) { ?>
<?php if(get_field('photogallery') != '') { ?>
<section class="event-photo-section">
    <div class="container">
        <div class="photo-box" style="margin-left: 0.8%;margin-right: 0.8%;width: 100%;">
            <div class="box-title"><?php the_field('photogallery_title'); ?></div>
            <?php the_field('photogallery'); ?>
        </div>
    </div>
</section>
<?php } } ?>

<footer id="footer">
    <div class="footer_iframe"  align="center">
        <div class="container">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/imarketing.ua/&amp;width=1050&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:214px;" allowTransparency="true"></iframe>
        </div><!-- div.container end -->
    </div><!-- div.footer_top end -->
    <div class="footer_partner">
        <div class="container">
            <?php query_posts($query_string . 'cat=9&showposts=-1'); ?>
            <h2><?php single_cat_title(); ?></h2>
            <div class="logo-w">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="logo-item">
                        <a href="#"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div><!-- div.container end -->
    </div><!-- div.footer_top end -->
    <div class="footer_bottom">
        <div class="container">
            <div class="copyright-w">
                Все и даже больше об интернет-маркетинге
            </div>
            <div class="fb-w">
                <a href="https://www.facebook.com/imarketing.ua/">
                    <i class="fa fa-facebook-official"></i><span>Facebook</span>
                </a>
            </div>
            <div class="tel-w">
                <a href="tel:0443611816">
                    <i class="fa fa-phone-square"></i><span>(044)361-18-16</span>
                </a>
            </div>
            <div class="mail-w">
                <a href="mailto:seminar@i-marketing.ua">
                    <i class="fa fa-envelope"></i><span>seminar@i-marketing.ua</span>
                </a>
            </div>
        </div><!-- div.container end -->
    </div><!-- div.footer_top end -->
</footer>
</div>

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
<noscript><div><img src="https://mc.yandex.ru/watch/17578525" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
