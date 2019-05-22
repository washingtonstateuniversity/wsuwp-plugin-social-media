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
}

.wsu-social-search-tabs li a {
    width: 80px;
    height: 60px;
    background: #000;
    display: block;
    text-align: center;
}

.wsu-social-search-tab-content {
    clear: both;
    display: block;
}

.wsu-form-field-wrapper.text-field label,
.wsu-form-field-wrapper.select-field label,
.wsu-form-field-wrapper.multiline-field label {
    display: block;
}

.wsu-form-field-wrapper.multiline-field textarea {
    width: 100%;
    height: 75px;
}
</style>
<script>
function wsu_social_tabs() {

    this.tabs = [];
    var self = this;

    this.init = function() {

        self.tabs = document.getElementsByClassName('wsu-social-search-tab');
        //console.log( self.tabs );
        if ( self.tabs.length ) {
            self.bind_events();
        } // End if

    } // End init

    this.bind_events = function() {

        for ( i = 0; i < self.tabs.length; i++ ) {

            self.tabs[i].addEventListener( "click", self.tab_click );

        } // End for

    } // End bind_events

    this.tab_active = function( tab_link ) {
        var tab = tab_link.parentElement;
        //var tabs = tab.parentElement.childNodes;
        var tabs = tab.parentElement.childNodes;
        console.log( tabs );
        alert( tabs.length );
        tab.classList.add('active-tab');
    }

    this.tab_click = function( event ) {
        self.tab_active( event.target );
        //console.log( event );
    }

    this.init();

}

$wsu_ss_tabs = new wsu_social_tabs();

</script>