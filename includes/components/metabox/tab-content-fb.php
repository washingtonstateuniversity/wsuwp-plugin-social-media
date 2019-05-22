<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content">
	<h2>Facebook Settings</h2>
	<div class="wsu-form-field-wrapper-group">
		<input type="text" name="_wsu_social_fb_img_src" value="<?php echo esc_attr( $fb_img_src ); ?>" />
		<input type="text" name="_wsu_social_fb_img_src_large" value="<?php echo esc_attr( $fb_img_src_small ); ?>" />
		<input type="text" name="_wsu_social_fb_img_src_small" value="<?php echo esc_attr( $fb_img_src_large ); ?>" />
		<input type="text" name="_wsu_social_fb_img_id" value="<?php echo esc_attr( $fb_img_id ); ?>" />
		<div class="wsu-form-field-wrapper">
			<button>Update Image</button>
			<button>Remove</button>
		</div>
	</div>
	<div class="wsu-form-field-wrapper">
		<label>Facebook Post Title</label>
		<input type="text" name="_wsu_social_fb_title" value="<?php echo esc_attr( $fb_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
	</div>
	<div class="wsu-form-field-wrapper multiline-field">
		<label>Facebook Post Snippet</label>
		<textarea name="_wsu_social_fb_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $fb_snippet ); ?></textarea>
	</div>
</fieldset>
