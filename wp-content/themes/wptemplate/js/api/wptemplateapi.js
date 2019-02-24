
jQuery(document).ready(function(){

    var baseURL = WP_API_Settings.root;
    baseURL = baseURL+"wp/v2";

    // Send request
    jQuery.ajax({
        url: url,
        beforeSend: function( xhr ) {
            // Important : authenticate user to grant access to all WP API ENDPOINT
            xhr.setRequestHeader('X-WP-Nonce', WP_API_Settings.nonce);
        }
    })
        .done(function( data ) {
            var jQueryr = jQuery("#result");

            jQueryr.html( htmlEncode(JSON.stringify(data, undefined, 2)));
            //console.log(JSON.stringify(data, undefined, 2));

            jQuery(".updated").fadeIn(function(){
                setTimeout(function(){
                    jQuery(".updated").fadeOut();
                }, 1500);
            });
        });

});
