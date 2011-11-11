<?php 


/**
 * Add javascript files for front-page jquery slideshow.
 */

function bluemasters_addthis_button($variables) {
  $build_mode = $variables['build_mode'];
  $https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
  if (variable_get('addthis_dropdown_disabled', '0')) {
    return ( sprintf('
      <div class="addthis_toolbox addthis_default_style ">
      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
      <a class="addthis_button_tweet"></a>
      <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
      <a class="addthis_counter addthis_pill_style"></a>
      </div>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e4bb5225deb1d13"></script>'

    ));
  }
  else {
    return ( sprintf('
      <div class="addthis_toolbox addthis_default_style ">
      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
      <a class="addthis_button_tweet"></a>
      <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
      <a class="addthis_counter addthis_pill_style"></a>
      </div>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e4bb5225deb1d13"></script>'
    ));
  }
}


function bluemasters_form_alter(&$form, &$form_state, $form_id) {
  
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#default_value'] = 'Search on Makapic.com';	
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search on Makapic.com'; this.style.color = '#6A87A3';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search on Makapic.com') {this.value = ''; this.style.color = '#6a87a3';}";
  } 
}

?>
