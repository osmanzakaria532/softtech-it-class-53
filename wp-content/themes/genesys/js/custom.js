jQuery(document).ready(function() {
    jQuery('#hamburger').sidr();
    });
        jQuery( ".menu-toggle" ).click( function() {
            jQuery("body").toggleClass('fixed');
        });
        
    //  mobile menu
	jQuery('#sidr').sidr({
		onOpen: function() { jQuery("#close-menu").focus();},
		onClose: function() { jQuery("#hamburger").focus();}
	});  
		
    // focus on close menu
	jQuery( '#ham-menu' ).click(function () {
		  jQuery('#close-menu').focus();
		});


        // focus on close menu
        jQuery( "#ham-menu" ).click(function() {
            jQuery( "#close-menu" ).focus();
          });


        // focus on open menu
        jQuery( "#close-menu" ).click(function() {
            jQuery( "#ham-menu" ).focus();
          });

    // Navigation with keyboard on mobile
	jQuery('.go-to-top').focus(function(){
		jQuery("#close-menu").focus();
	});
	
	jQuery('.go-to-bottom').focus(function(){
		jQuery("#mobile-menu-sidr.menu li:last-of-type a").focus();
	});
       
        
        
        
        
        