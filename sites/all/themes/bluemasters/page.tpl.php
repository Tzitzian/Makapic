<div id="page">

<!--header-top-->
<div id="header-top">
    <div id="header-top-inside" class="clearfix">
    	
        <!--header-top-inside-left-->
        <div id="header-top-inside-left"><?php print render($page['header']); ?></div>
        <!--EOF:header-top-inside-left-->
        
        <!--header-top-inside-left-feed-->
        <div id="header-top-inside-left-feed">
            <div id="topSocial">
            <ul>            					
                <li><a class="twitter" href="http://twitter.com/makapic" target=_blank title="Follow Us on Twitter!"></a></li>
                <li><a class="facebook" href="http://www.facebook.com/Makapic" target=_blank  title="Join Us on Facebook!"></a></li>
                <li><a class="rss" title="RSS" href="/makapic.xml" target=_blank title="Subcribe to Our RSS Feed"></a></li>
            </ul>
            </div>
        </div>
        <!--EOF:header-top-inside-left-feed-->
        
        <!--header-top-inside-left-right-->
        <div id="header-top-inside-right"><?php print render($page['search_area']);?></div> 
        <!--EOF:header-top-inside-left-right-->
         
    </div>
</div>
<!--EOF:header-top-->

<div id="wrapper">

    <!--header-->
    <div id="header" class="clearfix">
    	
        <!--logo-floater-->
        <div id="logo-floater"> 
			<?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
            <?php endif; ?>
            
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
				<?php if ($site_name): ?>
                <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                <?php endif; ?>
                
                <?php if ($site_slogan): ?>
                <span id="slogan"><?php print $site_slogan; ?></span>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div> <!--EOF:logo-floater-->
        
        <!--navigation-->
        <div id="navigation">
			<?php $menu_name = variable_get('menu_main_links_source', 'main-menu');
            $main_menu_tree = menu_tree($menu_name); 
            print drupal_render($main_menu_tree); ?>
        </div><!--EOF:navigation-->
       
    </div><!--EOF:header-->
    
    <div id="main-area" class="clearfix">
    
    <div id="main-area-inside" class="clearfix">
    
        <div id="main"  class="inside clearfix">
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
			<?php if ($messages): ?>
            <div id="console" class="clearfix">
			<?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
			<?php print render($action_links); ?>
            </ul>
			<?php endif; ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php if ($feed_icons): ?><?php print $feed_icons; ?><?php endif; ?>
            
        </div><!--main-->
    
		<?php if($page['sidebar_first']): ?>
        <div id="right" class="clearfix">
            
            <div id="network" class="block">
                <h2>Network Connect</h2>  
                <div class="network">
                    <a href="http://twitter.com/makapic" target=_blank class="twitter">Twitter</a>
                    <a href="http://www.facebook.com/Makapic" target=_blank class="facebook">Facebook</a>
                    <a href="/makapic.xml" target=_blank class="rss">RSS</a>
                </div>
            </div>
                
            <?php print render($page['sidebar_first']); ?>
        
        </div><!--right-->
        <?php endif; ?>
        
    </div>
    
    </div><!--main-area-->
    
</div><!-- /#wrapper-->

<!--footer-->
<div id="footer">
    <div id="footer-inside" class="clearfix">
    
    	<div id="footer-left">
    		<div id="footer-left-1">
    			<?php print render($page['footer_left_1']);?>
    		</div>
    		<div id="footer-left-2">
    			<?php print render($page['footer_left_2']);?>
    		</div>
        </div>
        
        <div id="footer-center">
        	<?php print render($page['footer_center']);?>
        </div>
        
        <div id="footer-right">
        	<?php print render($page['footer_right']);?>
        </div>
        
    </div>
</div>
<!--EOF:footer-->

<!--footer-bottom-->
<div id="footer-bottom">
    <div id="footer-bottom-inside" class="clearfix">
    	<div id="footer-bottom-inside-left">
    		<?php print render($page['footer']);?>
    	</div>
    </div> 
</div>
<!--EOF:footer-bottom-->

</div><!--EOF:page-->
