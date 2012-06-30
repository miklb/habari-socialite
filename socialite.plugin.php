<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); }

	
/**
 * Socialite Plugin adds common social sharing buttons to posts.
 *
 * Usage:
 * <code> echo $theme->display('socialite');</code>
 */

class Socialite extends Plugin {
	
	public function help() {

		$help = _t( 'This plugin adds Twitter, Google+, Facebook and LinkedIn sharing buttons in theme templates. Currently the only configuration
			is adding Twitter account for a via link. To add the buttons, insert <code> echo $theme->display(\'socialite\');</code>
			into the template(s) you\'d like them to appear' );
		
		return $help;
 	}

 	/**
 	 * Load external javascript and CSS, register the template and Twitter user option.
 	 */
 	
 	public function action_init() {

 		// Register the theme template
 		$this->add_template('socialite', dirname(__FILE__) . '/socialite.php');

 		// Load the javascript and css
 		Stack::add( 'template_footer_javascript', Site::get_url('scripts') . '/jquery.js', 'jquery' );
		Stack::add( 'template_footer_javascript', $this->get_url() . '/socialite.min.js', 'socialite-js', 'jquery' );
		Stack::add( 'template_footer_javascript', $this->get_url() . '/socialite-habari.js', 'socialite-habari', 'socialite-js');
		Stack::add( 'template_stylesheet', array( $this->get_url() . '/socialite.css', 'screen,projector'), 'socialite-css' );
 	}

 	public function configure() {

 		$ui = new FormUI( strtolower( get_class( $this ) ) );
 		$ui->append( 'text', 'twittername', 'socialite__twittername', _t('Twitter Name:', 'plugin_locale') );
  		$ui->append('submit', 'save', _t('Save', 'plugin_locale'));
  return $ui;
 	}

}
	
	
?>