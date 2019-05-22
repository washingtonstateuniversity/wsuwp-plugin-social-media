<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content">
	<h2>Twitter Settings</h2>
	<div class="wsu-field-group">
		<input type="text" name="_wsu_social_tw_img_src" value="<?php echo esc_attr( $tw_img_src ); ?>" />
		<input type="text" name="_wsu_social_tw_img_src_large" value="<?php echo esc_attr( $tw_img_src_small ); ?>" />
		<input type="text" name="_wsu_social_tw_img_src_small" value="<?php echo esc_attr( $tw_img_src_large ); ?>" />
		<input type="text" name="_wsu_social_tw_img_id" value="<?php echo esc_attr( $tw_img_id ); ?>" />
		<div class="wsu-field-wrapper">
			<button>Update Image</button>
			<button>Remove</button>
		</div>
	</div>
	<div class="wsu-field-wrapper">
		<label>Twitter Title</label>
		<input type="text" name="_wsu_social_tw_title" value="<?php echo esc_attr( $tw_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
	</div>
	<div class="wsu-form-field-wrapper multiline-field">
		<label>Twitter Snippet</label>
		<textarea name="_wsu_social_tw_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $tw_snippet ); ?></textarea>
	</div>
</fieldset>
