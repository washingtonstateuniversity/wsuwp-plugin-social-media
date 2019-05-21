<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content">
	<h2>Twitter Settings</h2>
	<div class="wsu-field-group">
		<input type="text" name="_wsu_social_tw_img_src" value="<?php echo esc_attr( $tw_img_src ); ?>" />
		<input type="text" name="_wsu_social_tw_img_src_large" value="<?php echo esc_attr( $tw_img_src_small ); ?>" />
		<input type="text" name="_wsu_social_tw_img_src_small" value="<?php echo esc_attr( $tw_img_src_large ); ?>" />
		<input type="text" name="_wsu_social_tw_img_id" value="<?php echo esc_attr( $tw_img_id ); ?>" />
		<div class="wsu-field">
			<button>Update Image</button>
			<button>Remove</button>
		</div>
	</div>
	<div class="wsu-field">
		<label>Twitter Title</label>
		<input type="text" name="_wsu_social_tw_title" value="<?php echo esc_attr( $tw_title ); ?>" />
	</div>
	<div class="wsu-field">
		<label>Twitter Snippet</label>
		<input type="text" name="_wsu_social_tw_snippet" value="<?php echo esc_attr( $tw_snippet ); ?>" />
	</div>
</fieldset>
