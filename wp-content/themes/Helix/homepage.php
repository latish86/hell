<?php
/**
 Template name:Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package web2feel
 * @since web2feel 1.0
 */?>
<style>
    #slogan{
       margin: 0px 0 0 240px; 
       padding: 60px 0 0 25px;
    }
    #group1 p{
        font-size: 20px;
        color: white;
        font-weight: bolder;
        text-align: right;
    }
    #group2 p{
        font-size: 30px;
        color: white;
        font-weight: bolder;
        text-align: center;
    }
    #group3 p{
        font-size: 20px;
        color: white;
        font-weight: bolder;
        text-align: center;
    }
    
    
</style>
	<img id="cycle-loader" src="../lib/images/ajax-loader.gif" />
	<div id="maximage">

				<?php $count = of_get_option('w2f_slide_number');
				$slidecat =of_get_option('w2f_slide_categories');
				$query = new WP_Query( array( 'cat' =>$slidecat,'posts_per_page' =>$count,'post_type' => 'slide' ) );
	           	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>
	 	
		 		<?php	$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); ?>
						
				<img class="slide-image" src="<?php echo $img_url ?>"/>
				
				<?php endwhile; endif; ?>
	</div>
	<div class="mesh"></div>
	<div class="dome">
		<ul>
			<li id="arrow_left"></li>
			<li id="arrow_right"></li>
		</ul>
	</div>
<?get_header(); ?>
<div id="slogan">
    <div id="group1">
        <p>У конкурентов уже есть сайт?<br>
           Нужно увеличить поток клиентов?<br>
           Не хотите вкладывать много денег?</p>
    </div>
    <div id="group2">
        <p>Позвоните нам и забудьте эти проблеммы!!!
           тел. +7(3462)904928</p>
    </div>
    <div id="group3">
        <p>Поможем Вам открыть представительство в сети Интернет
и          доведем ваш сайт до первых клиентов, без лишних затрат.</p>
    </div>
<?php get_footer(); ?>
</div>