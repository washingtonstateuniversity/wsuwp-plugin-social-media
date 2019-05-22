<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content wsu-form-field-group-wrapper">
	<h2>Search Settings</h2>
	<div class="wsu-form-field-wrapper">
		<label>Page Title</label>
		<input type="text" name="_wsu_search_title" value="<?php echo esc_attr( $search_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>" />
	</div>
	<div class="wsu-form-field-wrapper multiline-field">
		<label>Search Snippet</label>
		<textarea name="_wsu_search_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $search_snippet ); ?></textarea>
	</div>
	<div class="wsu-form-field-wrapper">
		<label>Keywords</label>
		<input type="text" name="_wsu_search_keyworkds" value="<?php echo esc_attr( $search_snippet ); ?>" />
	</div>
</fieldset>
