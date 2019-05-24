<?php namespace WSUWP\Social;

?>
<fieldset id="wsu-social-search-tab-content" class="wsu-social-tab-content wsu-social-search-tab-content wsu-form-field-group-wrapper">
	<h3>Search Settings</h3>
	<div class="wsu-form-field-wrapper multiline-field">
		<label>Search Snippet</label>
		<textarea name="_wsu_search_snippet" placeholder="<?php echo esc_attr( $default_snippet ); ?>"><?php echo esc_html( $search_snippet ); ?></textarea>
	</div>
	<div class="wsu-form-field-wrapper text-field">
		<label>Keywords</label>
		<input type="text" name="_wsu_search_keyworkds" value="" />
	</div>
</fieldset>
