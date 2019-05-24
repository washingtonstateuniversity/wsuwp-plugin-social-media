<?php namespace WSUWP\Social;

?>
<fieldset id="wsu-social-tw-tab-content" class="wsu-social-tab-content wsu-social-search-tab-content">
	<h3>Twitter Share Settings</h3>
	<div class="wsu-form-field-group-wrapper wsu-form-field-media-upload-group">
		<div class="wsu-image-preview wsu-media-upload-preview" style="background-image:url(<?php echo esc_url( $tw_img_preview ); ?>)" data-default="">
		</div>
		<input type="hidden" name="_wsu_social_tw_img_src" class="wsu-media-upload-url" value="<?php echo esc_attr( $tw_img_src ); ?>" />
		<input type="hidden" name="_wsu_social_tw_img_src_large" value="<?php echo esc_attr( $tw_img_src_small ); ?>" />
		<input type="hidden" name="_wsu_social_tw_img_src_small" value="<?php echo esc_attr( $tw_img_src_large ); ?>" />
		<input type="hidden" name="_wsu_social_tw_img_id" class="wsu-media-upload-id" value="<?php echo esc_attr( $tw_img_id ); ?>" />
		<div class="wsu-form-field-wrapper">
			<button class="button-primary button wsu-add-media-action">Update Image</button>
			<button class="button-primary button wsu-remove-media-action">Remove</button>
		</div>
	</div>
	<div class="wsu-form-field-group-wrapper wsu-form-field-tw-group">
		<div class="wsu-form-field-wrapper text-field">
			<label>Twitter Title</label>
			<input type="text" name="_wsu_social_tw_title" value="<?php echo esc_attr( $tw_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
		</div>
		<div class="wsu-form-field-wrapper multiline-field">
			<label>Twitter Snippet</label>
			<textarea name="_wsu_social_tw_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $tw_snippet ); ?></textarea>
		</div>
	</div>
</fieldset>
