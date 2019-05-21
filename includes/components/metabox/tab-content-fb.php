<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content">
	<h2>Facebook Settings</h2>
	<div class="wsu-field-group">
		<input type="text" name="wsu_social_fb_img_id" value="<?php echo esc_attr( $fb_img_id ); ?>" />
		<div class="wsu-field">
			<button>Update Image</button>
			<button>Remove</button>
		</div>
	</div>
	<div class="wsu-field">
		<label>Facebook Post Title</label>
		<input type="text" name="wsu_social_fb_title" value="<?php echo esc_attr( $fb_title ); ?>" />
	</div>
	<div class="wsu-field">
		<label>Facebook Post Snippet</label>
		<input type="text" name="wsu_social_fb_snippet" value="<?php echo esc_attr( $fb_snippet ); ?>" />
	</div>
</fieldset>
