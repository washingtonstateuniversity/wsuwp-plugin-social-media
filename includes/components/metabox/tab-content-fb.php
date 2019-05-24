<?php namespace WSUWP\Social;

?>
<fieldset id="wsu-social-fb-tab-content" class="wsu-social-tab-content wsu-social-search-tab-content active-tab">
	<h3>Facebook Share Settings</h3>
	<div class="wsu-form-field-group-wrapper wsu-form-field-media-upload-group">
		<div class="wsu-image-preview wsu-media-upload-preview" style="background-image:url(<?php echo esc_url( $fb_img_preview ); ?>)">
		</div>
		<input type="hidden" name="_wsu_social_fb_img_src" class="wsu-media-upload-url" value="<?php echo esc_attr( $fb_img_src ); ?>" />
		<input type="hidden" name="_wsu_social_fb_img_src_large" value="<?php echo esc_attr( $fb_img_src_small ); ?>" />
		<input type="hidden" name="_wsu_social_fb_img_src_small" value="<?php echo esc_attr( $fb_img_src_large ); ?>" />
		<input type="hidden" name="_wsu_social_fb_img_id" class="wsu-media-upload-id" value="<?php echo esc_attr( $fb_img_id ); ?>" />
		<div class="wsu-form-field-wrapper">
			<button class="button-primary button wsu-add-media-action">Update Image</button>
			<button class="button-primary button wsu-remove-media-action">Remove</button>
		</div>
	</div>
	<div class="wsu-form-field-group-wrapper wsu-form-field-fb-group">
		<div class="wsu-form-field-wrapper text-field">
			<label>Facebook Post Title</label>
			<input type="text" name="_wsu_social_fb_title" value="<?php echo esc_attr( $fb_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
		</div>
		<div class="wsu-form-field-wrapper multiline-field">
			<label>Facebook Post Snippet</label>
			<textarea name="_wsu_social_fb_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $fb_snippet ); ?></textarea>
		</div>
	</div>
</fieldset>
