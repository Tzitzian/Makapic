<?php

/**
 * Override or insert variables into the page template.
 */
function journalcrunch_preprocess_page(&$vars) {
  // Prepare header.
  $site_fields = array();
  if (!empty($vars['site_name'])) {
    $site_fields[] = $vars['site_name'];
  }
  if (!empty($vars['site_slogan'])) {
    $site_fields[] = $vars['site_slogan'];
  }
  $vars['site_title'] = implode(' ', $site_fields);
  if (!empty($site_fields)) {
    $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
  }
  $vars['site_html'] = implode(' ', $site_fields);

  // Set a variable for the site name title and logo alt attributes text.
  $slogan_text = $vars['site_slogan'];
  $site_name_text = $vars['site_name'];
  $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}

/**
 * Define JournalCrunch variables
 */
variable_set('isFirstNoStickyNode', false);

function journalcrunch_addthis_button($variables) {
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

function journalcrunch_form_alter(&$form, &$form_state, $form_id) {
  
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search on Makapic.com'; this.style.color = '#757575';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search on Makapic.com') {this.value = ''; this.style.color = '#000';}";
  } 
}

?>
