/**
 * Mobile Navigation module
 */
define(["jquery"], function($) {

	var MobileNavigation = function () {    
        this.settings = $.extend({}, this.settings);
        this.init();
    };

    MobileNavigation.prototype = {

	   /**
     	* Settings
     	*/
     	settings : {
			context : $('body'),
            toggle_button : '#navigation-toggle'
		},

		/**
     	 * init
     	 */
		init : function() {
            this.toggleMenu(this.settings.toggle_button);
        },

        /**
         * showProjectsPanel
         */
        toggleMenu : function (toggle_button) {    
            $(toggle_button).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
                $(".cmp-navigation").toggleClass("open");
                $(".cmp-content-container").toggleClass("open");
            });
        }    
    };

    return {
        init : function() {
            new MobileNavigation();
        }
    };	
});