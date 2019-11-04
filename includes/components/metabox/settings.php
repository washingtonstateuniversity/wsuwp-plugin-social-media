<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-tab-content wsu-social-search-tab-content">
	<div class="wsu-form-field-group-wrapper wsu-form-field-media-upload-group">
		<div class="wsu-image-preview wsu-media-upload-preview" style="background-image:url(<?php echo esc_url( $img_preview ); ?>)">
		</div>
		<input type="hidden" name="_wsu_social_img_src" class="wsu-media-upload-url" value="<?php echo esc_attr( $img_src ); ?>" />
		<input type="hidden" name="_wsu_social_img_id" class="wsu-media-upload-id" value="<?php echo esc_attr( $img_id ); ?>" />
		<input type="hidden" name="_wsu_social_fb_img_src" value="" />
		<input type="hidden" name="_wsu_social_fb_img_id" value="" />
		<div class="wsu-form-field-wrapper">
			<button class="button-primary button wsu-add-media-action">Update Image</button>
			<button class="button-secondary button wsu-remove-media-action">X Remove</button>
		</div>
	</div>
	<div class="wsu-form-field-group-wrapper wsu-form-field-fb-group">
		<div class="wsu-form-field-wrapper text-field">
			<label>Post Title</label>
			<input type="text" name="_wsu_social_title" value="<?php echo esc_attr( $title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
		</div>
		<div class="wsu-form-field-wrapper multiline-field">
			<label>Post Snippet</label>
			<textarea name="_wsu_social_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $snippet ); ?></textarea>
		</div>
	</div>
</fieldset>
