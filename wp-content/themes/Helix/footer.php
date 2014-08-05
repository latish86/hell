<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>
</div>
	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="fcred">
		Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.
		Тема от <a href="http://topwpthemes.com/<?php echo wp_get_theme(); ?>/" ><?php echo wp_get_theme(); ?> Theme</a>.
	  		</div>
                    <div style="float: right; margin-right: 5px; visibility: hidden;">
                        <!--LiveInternet counter--><script type="text/javascript"><!--
                        document.write("<a href='//www.liveinternet.ru/click' "+
                        "target=_blank><img src='//counter.yadro.ru/hit?t26.5;r"+
                        escape(document.referrer)+((typeof(screen)=="undefined")?"":
                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                        ";"+Math.random()+
                        "' alt='' title='LiveInternet: показано число посетителей за"+
                        " сегодня' "+
                        "border='0' width='88' height='15'><\/a>")
                        //--></script><!--/LiveInternet-->
                    </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
<?php if(is_single()) { ?>
<script type="text/javascript">
		jQuery.backstretch("<?php get_image_url(); ?>  ");
</script>
<?php } elseif(!is_front_page()) { ?>
<script type="text/javascript">
	jQuery.backstretch("<?php echo of_get_option('w2f_defaultbg'); ?>  ");
</script>
<?php } ?>
</body>
</html>