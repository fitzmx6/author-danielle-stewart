$( document ).ready(function() {

// Mobile Menue for IPHONE
 
    // Create the dropdown base
    jQuery("<select onchange='if (this.value) window.location.href = this.value;'> />").prependTo("#nav");
    jQuery('<option value="" selected="selected">Menu</option>').prependTo("#nav select");
    // Create default option "Go to..."
   
 
    // Populate dropdown with menu items
    jQuery("#nav a").each(function () {
        var el = jQuery(this);
        jQuery("<option />", {
            "value": el.attr("href"),
                "text": el.text()
 
        }).appendTo("#nav select");
 
    });
    jQuery("#mobile_menu select").change(function () {
        window.location = jQuery(this).find("option:selected").val();
    });
    $("#nav select option").css({'padding-right':'10px'});
});