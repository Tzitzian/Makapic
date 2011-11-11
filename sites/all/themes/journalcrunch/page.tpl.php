<div id="mainWrapper">

    <!-- Header. -->
    <div id="wrapper">

    <!-- Header. -->
    <div id="header">
    
        <div id="logo-floater">
            <h1><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php if(isset($site_name_and_slogan)) { print $site_name_and_slogan;} ?>" title="<?php if(isset($site_name_and_slogan)) { print $site_name_and_slogan;} ?>" id="logo" /><br/>
            <?php endif; ?>
            <?php if(isset($site_name_and_slogan)) { print $site_name_and_slogan;} ?>
            </a></h1>
            
        </div>
        
        <div id="topMenu">
           
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links primary-links', 'inline', 'clearfix')))); ?>
 
        </div>
        
        <div id="topSearch">
		<?php print render($page['header']); ?>
        </div>
        
        <div id="topSocial">
            
            <ul>									
                <li><a class="twitter tip" href="http://twitter.com/makapic" target=_blank title="Follow Us on Twitter!"></a></li>
                <li><a class="facebook" href="http://www.facebook.com/Makapic" target=_blank title="Join Us on Facebook!"></a></li>
                <li><a class="rss" href="makapic.xml" target=_blank title="Subcribe to Our RSS Feed"></a></li>
            </ul>
        
        </div>
		
    
    </div><!-- EOF: #header -->
    
	<!-- Content. -->
    <div id="content">
    
		<?php if ($is_front) {
            print $messages;
            if ($tabs): print render($tabs); endif;
			print render($page['content']);
			print render($page['help']);
         } else { ?>
            <div id="colLeft">
            
                <?php print $messages;?>
                <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php print render($page['content']); ?>
                
            </div><!-- EOF: #main -->
            
            <div id="colRight">

          	<?php print render($page['sidebar_first']); ?>

            </div><!-- EOF: #sidebar -->
         <?php }  ?>

    </div><!-- EOF: #content -->
    
</div><!-- EOF: #wrapper -->
    
<!-- Footer -->    
<div id="footer">
        
    <div id="footerInner">
    
        <div class="blockFooter">
            <?php //print $footer_first; ?>
            <?php print render($page['footer_first']); ?>
        </div>
        
        <div class="blockFooter">
            <?php //print $footer_second; ?>
            <?php print render($page['footer_second']); ?>
        </div>
        
        <div class="blockFooter">
            <?php //print $footer_third; ?>
            <?php print render($page['footer_third']); ?>
        </div>
        
        <div class="blockFooter">
            <?php //print $footer_fourth; ?>
            <?php print render($page['footer_fourth']); ?>
        </div>
        
    <div id="secondary-links">
        <?php if (isset($secondary_menu)) { ?><?php print theme('links', $secondary_menu, array('class' => 'links', 'id' => 'subnavlist')); ?><?php } ?>
    </div>
        
    <div id="footer-message">
        <?php //print $footer_message ?>
        Ported to Drupal for the Open Source Community by <a href="http://www.drupalizing.com">Drupalizing</a>, a Project of <a href="http://www.morethanthemes.com">More than Themes</a>
        <div style="clear:both; display:block;"><a href="http://www.smashingmagazine.com/2010/12/09/journalcrunch-wordpress-3-0-theme-free-theme-for-portfolios-and-magazines/" class="smashing">SmashingMagazine</a><a href="http://www.drupalizing.com" class="drupalizing" title="Drupalizing">Drupalizing</a></div>
    </div>
    
    </div>
    
    </div>

</div><!-- EOF: #footer -->

</div>
<?php print render($page['page_bottom']); ?>
