<?php
function includePhpFunc($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include("../asset/php/$file.php");
  return ob_get_clean();
}
add_shortcode("includePhp","includePhpFunc");

global $wp_rewrite;
$wp_rewrite->flush_rules();

// function my_acf_init() {
//   acf_update_setting('google_api_key', 'AIzaSyAmJYtfnH4UjxzYHbf724dR9aJeZ1bh1Ow');
// }
// add_action('acf/init', 'my_acf_init');

?>
