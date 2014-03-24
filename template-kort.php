<?php

/*
Template Name: Kort

 * @author		Sveinbjorn
 * @email		sveinbjornt@gmail.com
 * @web			sveinbjorn.org
 
 * @name		Kort
 * @type		PHP page
 * @desc		Wordpress template

 * @requires	Wordpress
 * @install		Copy this file to the directory of the theme you wish to use, i.e. wp-content/themes/theme_name/
 * usage		
			   1. Create a new Page in your Wordpress control panel
			   2. Enter the URL (or local path, relative to your Wordpress directory) you want to redirect to as the only page content
			   3. Set the Page Template to "Greinasafn"
			   4. Publish
 */

?>

<?php get_header(); ?>

        <div id="world-map" style="width: 100%; height: 350px;"></div>
        <br>
        
    </div>
        
    <div class="col s1of3 sidebar">
        <p>Á <span class="cat-title">Lemúrs&shy;kortinu</span> geta menn flakkað heims&shy;hornanna á milli. 
            <img src="http://lemurinn.is/images/whacky-lemur-small.jpg" style="float: right; width: 80px; height: 94px;">
            Eins sést hefur Lemúrinn farið um flestar þjóðir heimsins gegnum árin. Smelltu á land til þess að fá upp tengdar greinar.</p>
    </div>

</div>

<!-- START OF CONTENT BELOW MAP -->

<?php get_template_part('kort-js'); ?>

<h2 id="selected-country"></h2>

<div id="country-article-results"></div>

<div class="pagination grid" id="more-articles" style="display: none;">
    <div class="col s1of2">
        
    </div>
    <div class="col s1of2">
        <a id="more-articles-link" href="" class="nextpostslink">Fleiri greinar &gt;&gt;</a>
    </div>
</div>

<br>

<!-- END OF CONTENT BELOW MAP -->

<div class="grid gutter collapse720">
    
    <div class="col s2of3">



<?php get_footer(); ?>
