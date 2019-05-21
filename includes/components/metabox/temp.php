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
}
</style>
<script>
function wsu_social_tabs() {

    this.tabs = [];
    var self = this;

    this.init = function() {

        self.tabs = document.getElementsByClassName('wsu-social-search-tab');
        console.log( self.tabs );
        if ( self.tabs.length ) {
            self.bind_events();
        } // End if

    } // End init

    this.bind_events = function() {

        for ( i = 0; i < self.tabs.length; i++ ) {

            self.tabs[i].addEventListener("click", self.tab_click );

        } // End for

    } // End bind_events

    this.tab_click = function( event, item ) {
        console.log( event );
        console.log( item );
        alert( 'fire' );
    }

    this.init();

}

$wsu_ss_tabs = new wsu_social_tabs();

</script>