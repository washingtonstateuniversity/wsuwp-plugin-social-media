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

            console.log( attachment );

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