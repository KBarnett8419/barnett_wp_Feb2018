<?php
$custom_colors = false;
?>

<div id="wph-wizard-design-style_colors">

	<div class="wpmudev-switch-labeled">

		<div class="wpmudev-switch">
			
			<input id="wph-popup-style_colors" class="toggle-checkbox" type="checkbox" data-id="" data-nonce=""<?php if ($custom_colors === true){ echo ' checked="checked"'; } ?>>
			
			<label class="wpmudev-switch-design" for="wph-popup-style_colors" aria-hidden="true"></label>
			
		</div>
		
		<label class="wpmudev-switch-label" for="wph-popup-style_colors"><?php _e( "Customize colors", Opt_In::TEXT_DOMAIN ); ?></label>

	</div>
    
</div>