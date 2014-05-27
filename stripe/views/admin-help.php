<?php

/**
 * Represents the view for the administration Help dashboard.
 *
 * @package    SC
 * @subpackage Views
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorsceb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include_once( 'admin-helper-functions.php' );

global $sc_options;

$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'base';

?>

<div class="wrap">
	<div id="sc-settings">
		<div id="sc-settings-content">

			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			
			<h2 class="nav-tab-wrapper">
				<?php
					$sc_tabs = sc_get_admin_help_tabs();
					
					foreach( $sc_tabs as $key => $value ) {
				?>
						<a href="<?php echo add_query_arg( 'tab', $key, remove_query_arg( 'settings-updated' )); ?>" class="nav-tab
							<?php echo $active_tab == $key ? 'nav-tab-active' : ''; ?>"><?php echo $value ?></a>
				<?php
					}
				?>
			</h2>

			<div id="tab_container">
					<?php do_action( 'sc_help_display_' . $active_tab ); ?>
			</div><!-- #tab_container-->

		</div><!-- #sc-settings-content -->

		<div id="sc-settings-sidebar">
			<?php include( 'admin-sidebar.php' ); ?>
		</div>

	</div>
</div><!-- .wrap -->
