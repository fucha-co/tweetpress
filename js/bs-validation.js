//
//	jQuery Validate
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){


	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

// WordPress Only
$.validator.methods.equal = function(value, element, param) {
  return value == param;
 };

// Basic Q&A
			$.validator.addMethod("isAllowed", function(value) {
    var domains = ["mytweetmemories.com", "www.mytweetmemories.com"]
    var in_array = $.inArray(value.toLowerCase(), domains);
    if (in_array == -1) {
        return false;
    }else{
        return true;
    }
}, "Wrong answer Punk. Try again.");


// Personal Prank, and so rewarding
			$.validator.addMethod("soupAndy", function(value) {
    var andyFlavours = ["@andyjane_mc", "andyjane_mc"]
    var in_array = $.inArray(value.toLowerCase(), andyFlavours);
    if (in_array == -1) {
        return true;
    }else{
        return false;
    }
}, " Hello Andy-Lee. Fancy seeing you here. NO SOUP FOR YOU! You come back 1 year!");


// Twitter name
  $.validator.addMethod("twitterName", function(value, element) {
      return this.optional(element) || /^[a-z0-9\_@]+$/i.test(value);
  }, " <strong>Whoa Momma</strong>. Twitter names *only* contain only letters, numbers & _underscores.");


// Validation
		$('#f1').validate({
	    rules: {
	      title: {
	        minlength:2,
	        maxlength:15,
	        required:true,
	        soupAndy: true,
	        twitterName:true
	      },
	      domain: {
	      		digits: true,
	      		minlength:1,
	        maxlength:3,
         equal: <?php echo $randomNumTotal; ?>,
	        required: true
	      },
	      email: {
	        isAllowed: true,
	        required: true
	      }
	    },
	    messages: {
								title: {
												minlength: " <i class='black general foundicon-up-arrow'></i> <strong>That's not a Twitter name?</strong><br> Please check your spelling and try again.",
												maxlength: " <i class='black general foundicon-up-arrow'></i> <strong>That Twitter name is too loooooooong</strong>.<br>. 15 characters maximum. Try again.",
												required: " <i class='black general foundicon-up-arrow'></i> <strong>Type a Twitter name in here</strong>"
											},
								domain: {
												digits: " Numbers only",
												minlength: " <i class='black general foundicon-up-arrow'></i> <strong>Your answer's too short</strong>?<br>",
												maxlength: " <i class='black general foundicon-up-arrow'></i> <strong>Whoa. Your answer's too much</strong>.<br>. Recalculate.",
												required: " <strong><i class='black general foundicon-up-arrow'></i> Answer this</strong>"
											},
								email: {
												minlength: " <i class='black general foundicon-up-arrow'></i> <strong>Email Too short</strong>.<br> That is not a Twitter name? Please check your spelling and try again.",
												maxlength: " <i class='black general foundicon-up-arrow'></i> <strong>Email too loooooooong</strong>.<br>. Twitter use 15 characters maximum, so you better try again.",
												required: " <strong><i class='black general foundicon-up-arrow'></i> Email missing</strong>",
												mtmc: "Wrong answer Punk"
											}
					},
					errorPlacement: function(error, element) {
        if (element.attr("name") === "title") {
            error.appendTo('.validate1');
        } else if (element.attr("name") === "domain") {
            error.appendTo('.validate2');
        } else if (element.attr("name") === "email") {
            error.appendTo('.validate3');
        }
    	},
	    highlight: function(label) {
	    	$(label).closest('.help-block').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text(' So far so good').addClass('valid')
	    		.closest('.help-block').addClass('success');
	    }
	  });

}); // end document.ready