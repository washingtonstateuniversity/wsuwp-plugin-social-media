<?php namespace WSUWP\Social;

?>
<fieldset class="wsu-social-search-tab-content">
	<h2>Search Settings</h2>
	<div class="wsu-field">
		<label>Page Title</label>
		<input type="text" name="_wsu_search_title" value="<?php echo esc_attr( $search_title ); ?>" />
	</div>
	<div class="wsu-field">
		<label>Search Snippet</label>
		<input type="text" name="_wsu_search_snippet" value="<?php echo esc_attr( $search_snippet ); ?>" />
	</div>
</fieldset>
