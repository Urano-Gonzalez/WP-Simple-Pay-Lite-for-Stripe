<div class="tab-content" id="stripe-keys-settings-tab">
	<form method="post" action="#stripe-keys-settings" id="stripe-keys-settings">
		<?php
			global $sc_options;
		?>
		
		<div>
			<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'enable_live_key' ) ); ?>"><?php _e( 'Transaction Mode', 'sc' ); ?></label>
			<?php $sc_options->toggle_control( 'enable_live_key', array( __( 'Test', 'sc' ), __( 'Live', 'sc' ) ) ); ?>
			<?php $sc_options->description( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://dashboard.stripe.com/account/apikeys', 
														__( 'Find your Stripe API keys here', 'sc' ) ), '' ); ?>
		</div>
		
		<div>
			<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'test_secret_key' ) ); ?>"><?php _e( 'Test Secret Key', 'sc' ); ?></label>
			<?php $sc_options->textbox( 'test_secret_key', 'regular-text' ); ?>
		</div>
		
		<div>
			<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'test_publish_key' ) ); ?>"><?php _e( 'Test Publish Key', 'sc' ); ?></label>
			<?php $sc_options->textbox( 'test_publish_key', 'regular-text' ); ?>
		</div>
		
		<div>
			<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'live_secret_key' ) ); ?>"><?php _e( 'Live Secret Key', 'sc' ); ?></label>
			<?php $sc_options->textbox( 'live_secret_key', 'regular-text' ); ?>
		</div>
		
		<div>
			<label for="<?php echo esc_attr( $sc_options->get_setting_id( 'live_publish_key' ) ); ?>"><?php _e( 'Live Publish Key', 'sc' ); ?></label>
			<?php $sc_options->textbox( 'live_publish_key', 'regular-text' ); ?>
		</div>

		<?php $sc_options->ajax_save_button( __( 'Save Settings', 'sc' ) ); ?>
	</form>
</div>
