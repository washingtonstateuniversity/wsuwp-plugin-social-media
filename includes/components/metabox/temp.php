<style>
.wsu-social-search-tabs {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.wsu-social-search-tabs li {
    float: left;
    display: block;
    margin-right: 5px;
    padding: 0;
    margin-bottom: 0;
}

.wsu-social-search-tabs li a {
    width: 80px;
    display: block;
    text-align: center;
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    padding: 10px 0;
    text-decoration: none;
    font-weight: bold;
    background-color: #efefef;
    position: relative;
    z-index: 2;
}

.wsu-social-search-tabs li.active-tab a {
    border-bottom: 1px solid #fff; 
    background-color: #fff;
    z-index: 4;
    outline: none
}
.wsu-social-search-tabs li.active-tab a:focus {
    outline: none
}
.wsu-social-search-tabs li a:before {
    content: "";
    width: 40px;
    height: 40px;
    background: #ccc;
    display: block;
    margin: auto;
}

.wsu-social-search-tab-content {
    clear: both;
    display: none;
    border: 1px solid #ccc;
    position: relative;
    top: -1px;
    padding: 20px;
    box-sizing: border-box;
    z-index: 3;
}


#wsu_social_options h3 {
    padding: 0 0 1rem;
    font-size: 1rem;
    font-weight: bold;
}

.wsu-social-search-tab-content.active-tab {
    display: block;
}

.wsu-form-field-wrapper {
    padding: 0.5rem 0 1rem;
}

.wsu-form-field-wrapper.text-field label,
.wsu-form-field-wrapper.select-field label,
.wsu-form-field-wrapper.multiline-field label {
    display: block;
}

.wsu-form-field-wrapper.multiline-field textarea {
    width: 100%;
    height: 100px;
}

.wsu-form-field-media-upload-group {
    float: left;
    width: 225px;
    overflow: hidden;
}

.wsu-form-field-media-upload-group .wsu-image-preview {
    padding-bottom: 100%;
    background: #ccc;
    border: 1px solid #999;
    box-sizing: border-box;
    width: 225px;
    background-position: center center;
    background-size: cover;
}

.wsu-form-field-tw-group,
.wsu-form-field-fb-group {
    margin-left: 240px;
}
</style>
<script>
function wsu_social_tabs() {

    this.tabs = [];
    this.media_uploader = false;
    this.media_upload_buttons = false;
    this.media_remove_buttons = false;
    var self = this;

    this.init = function() {

        self.tabs = document.getElementsByClassName('wsu-social-search-tab');

        self.media_upload_buttons = document.getElementsByClassName('wsu-add-media-action');

        self.media_remove_buttons = document.getElementsByClassName('wsu-remove-media-action');

        self.bind_events();

    } // End init

    this.bind_events = function() {

        for ( i = 0; i < self.tabs.length; i++ ) {

            self.tabs[i].addEventListener( "click", self.tab_click );

        } // End for

        for ( i = 0; i < self.media_upload_buttons.length; i++ ) {

            self.media_upload_buttons[i].addEventListener( "click", self.add_media );

        } // End for

        for ( i = 0; i < self.media_upload_buttons.length; i++ ) {

            self.media_remove_buttons[i].addEventListener( "click", self.remove_media );

        } // End for

    } // End bind_events

    this.tab_active = function( tab_link ) {
        var tab = tab_link.parentElement;
        //var tabs = tab.parentElement.childNodes;
        var tabs = tab.parentElement.childNodes;
        tab.classList.add('active-tab');
    }

    this.tab_click = function( event ) {
        var tab = event.target.parentElement;
        var tabs = document.body.querySelector('.wsu-social-search-tab-wrapper.active-tab');
        var tabs_content = document.body.querySelector('.wsu-social-tab-content.active-tab');
        var tab_content = document.getElementById(tab.dataset.tab);
        //self.tab_active( event.target );
        tabs.classList.remove('active-tab');
        tab.classList.add('active-tab');
        tabs_content.classList.remove('active-tab');
        tab_content.classList.add('active-tab');
        //console.log( event );
    }

    this.remove_media = function( event ) {

        event.preventDefault();

        var button_wrapper = event.target.parentElement;

        var media_upload_wrapper = button_wrapper.parentElement;

        var input_src = media_upload_wrapper.querySelector('.wsu-media-upload-url');
        
        var input_id = media_upload_wrapper.querySelector('.wsu-media-upload-id');
        
        var img_preview = media_upload_wrapper.querySelector('.wsu-media-upload-preview');

        input_src.value = '';
        input_id.value = '';

        img_url = '';

        img_preview.setAttribute('style', 'background-image:url(' + img_url + ')');
    }

    this.add_media = function( event ) {

        var button_wrapper = event.target.parentElement;

        var media_upload_wrapper = button_wrapper.parentElement;

        event.preventDefault();
    
        // If the media frame already exists, reopen it.
        if ( self.media_uploader ) {
            self.media_uploader.open();
            return;
        }

        self.media_uploader = wp.media({
            title: 'Select or Upload Media',
            button: {
                text: 'Use this media'
            },
            multiple: false  // Set to true to allow multiple files to be selected
        });

        // When an image is selected in the media frame...
        self.media_uploader.on( 'select', function() {
        
            // Get media attachment details from the frame state
            var attachment = self.media_uploader.state().get('selection').first().toJSON();

            console.log( media_upload_wrapper );

            var input_src = media_upload_wrapper.querySelector('.wsu-media-upload-url');
            var input_id = media_upload_wrapper.querySelector('.wsu-media-upload-id');
            var img_preview = media_upload_wrapper.querySelector('.wsu-media-upload-preview');

            input_src.value = attachment.url;
            input_id.value = attachment.id;

            img_preview.setAttribute('style', 'background-image:url(' + attachment.url + ')');

            console.log( attachment );

            // Send the attachment URL to our custom image input field.
            //imgContainer.append( '<img src="'+attachment.url+'" alt="" style="max-width:100%;"/>' );

            // Send the attachment id to our hidden input
            //imgIdInput.val( attachment.id );

            // Hide the add image link
            //addImgLink.addClass( 'hidden' );

            // Unhide the remove image link
            //delImgLink.removeClass( 'hidden' );
        });

        self.media_uploader.open();

    }

    this.init();

}

$wsu_ss_tabs = new wsu_social_tabs();

</script>