<?php
/**
 * Footer.php outputs the code for your footer widgets, contains your footer hook and closing body/html tags
 * @package Tetris WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>
<div class="clear"></div><!-- /clear any floats -->
<?php wpex_hook_content_bottom(); ?>
</div><!-- /main-content -->
<?php wpex_hook_content_after(); ?>
	<div id="footer-wrap">
    	<?php wpex_hook_footer_before(); ?>
        <footer id="footer">
        <?php wpex_hook_footer_top(); ?>
            <div id="footer-widgets" class="clearfix">
                <div class="footer-box">
                    <?php dynamic_sidebar('footer-one'); ?>
                </div><!-- /footer-box -->
                <div class="footer-box">
                    <?php dynamic_sidebar('footer-two'); ?>
                </div><!-- /footer-box -->
                <div class="footer-box remove-margin">
                    <?php dynamic_sidebar('footer-three'); ?>
                </div><!-- /footer-box -->
            </div><!-- /footer-widgets -->
            <?php wpex_hook_footer_bottom(); ?>
        </footer><!-- /footer -->
        <?php wpex_hook_footer_after(); ?>
    </div><!-- /footer-wrap -->
    
    <div class="latestTweetWrapper">
        <div class="latestTweet"><?php include 'latestTweet.php'; ?></div>
        <div class="edgarrlogo"><a href="http://twitter.com/edgardose" title="Edgar Rodriguez Twitter"><img src="<?php echo of_get_option('custom_logo'); ?>" alt="<?php get_bloginfo( 'name' ) ?>" /></a></div>
	</div> <!-- LatestTweetWrapper -->

    <div id="copyright">&copy; <?php _e('Copyright','wpex'); ?> <?php the_date('Y'); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - Theme by <a href="http://themeforest.net/user/WPExplorer?ref=wpexplorer" title="WPExplorer" target="_blank" rel="nofollow">WPExplorer</a> adapted by <a href="http://edgarrodriguez.me/">Edgarr</a></div>
</div><!-- /wrap -->
<?php wp_footer(); // Footer hook, do not delete, ever ?>
    
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-42514686-1', 'edgarr.com');
      ga('send', 'pageview');

    </script>

    <!-- Typekit -->
    <script type="text/javascript" src="//use.typekit.net/ied2nkh.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>