<?php
/**
 Template name:page_by_lat
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package web2feel
 * @since web2feel 1.0
 */

get_header(); ?>

<style>
    #port_table{
        list-style-type: none;
        width: 750px;
        margin: 0 auto;
        padding: 0;
        margin-top: 20px;
    }
    #port_table li{
        width: 47%;
        float:left;
        margin: 10px;
    }
    #port_table div{
        width: 300px;
        margin:0 auto;
        border-radius: 100px;
    }
    #port_table img{
        border-radius: 50px;
        border: 2px #EA5546 solid;
    }
</style>


<div id="main" class="cf">	
    <ul id="port_table">
        <li  style="width: 100%;">
            <div><h2 align="center">Наши работы:</h2></div>
        </li>
        <!--<li>
            <div>
                <a href="http://toglory.ru/?page_id=64">
                    <?php echo get_the_post_thumbnail('64', 'medium'); ?>
                    <h3 align="center">Сайт  журнала "Мой Сургут"</h3>
                </a>
            </div>
        </li>-->
        <li>
            <div>
                <a href="http://toglory.ru/?page_id=67">
                    <?php echo get_the_post_thumbnail('67', 'medium'); ?>
                    <h3 align="center">Сайт БУ КЦСОН "Содействие" г.Сургут</h3>
                </a>
            </div>
        </li>
        <!--<li>
            <div><?php echo get_the_post_thumbnail('64', 'medium'); ?></div>
            <div><h3 align="center">Сайт интернет журнала "Мой Сургут"</h3></div>
        </li>
        <li>
            <div><?php echo get_the_post_thumbnail('64', 'medium'); ?></div>
            <div><h3 align="center">Сайт БУ КЦСОН "Содействие" г.Сургут</h3></div>
        </li>
        <li>
            <div><?php echo get_the_post_thumbnail('64', 'medium'); ?></div>
            <div><h3 align="center">Сайт интернет журнала "Мой Сургут"</h3></div>
        </li>    
        <li>
            <div><?php echo get_the_post_thumbnail('64', 'medium'); ?></div>
            <div><h3 align="center">Сайт интернет журнала "Мой Сургут"</h3></div>
        </li>-->
    </ul>
</div>
<?php get_footer(); ?>