(function($){  
	$.fn.instantValidation = function(options) {  
		// Default Values
		var defaults = {  
			fadeSpeed: 250,
		};  
		var options = $.extend(defaults, options);  
		var isEmail_re = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
		var isInt_re = /[-+]?\b\d+\b/ ;
		var isPhone_re = /[0-9]{3}-[0-9]{3}-[0-9]{4}/;
		var isZip_re = /\b\d{5}\b/;
		var arrowHeight, arrowWidth, errorMessage;
		var collection = ".requiredText,.emailAddress,.int,.phone,.zip";

		return this.each(function() {  
			$(this).find(collection).each(function(){				   
				// Initializing Code
				$(this).after("<div class=\"error-message\">" + $(this).attr("title") + "<div class=\"error-message-arrow-border\"></div><div class=\"error-message-arrow\"></div></div>"); // create pop up validation message
				errorMessage = $(this).next();
				arrowHeight = $(errorMessage).children(".error-message-arrow-border").outerHeight()/2;
				arrowWidth = $(errorMessage).children(".error-message-arrow-border").outerWidth()/2; 
				$(errorMessage); // Set pop-up to location of input
				
				if ($(this).hasClass("showBottom")){
					$(errorMessage).children(".error-message-arrow-border").addClass("error-message-arrow-border-bottom");
					$(errorMessage).children(".error-message-arrow").addClass("error-message-arrow-bottom");
					$(errorMessage).css({marginLeft: "0px", marginTop: ($(this).outerHeight() + arrowHeight)  + "px"});				
				} else if ($(this).hasClass("showLeft")){
					$(errorMessage).children(".error-message-arrow-border").addClass("error-message-arrow-border-left");
					$(errorMessage).children(".error-message-arrow").addClass("error-message-arrow-left");
					$(errorMessage).css({marginLeft: "-" + ($(errorMessage).outerWidth() + arrowWidth)+ "px", marginTop: "0px"});				
				} else if ($(this).hasClass("showRight")){
					$(errorMessage).children(".error-message-arrow-border").addClass("error-message-arrow-border-right");
					$(errorMessage).children(".error-message-arrow").addClass("error-message-arrow-right");
					// $(errorMessage).css({marginLeft: ($(this).outerWidth(true) + arrowWidth)+ "px", marginTop: "0px"});				
				} else {
					$(errorMessage).children(".error-message-arrow-border").addClass("error-message-arrow-border-top");
					$(errorMessage).children(".error-message-arrow").addClass("error-message-arrow-top");
					$(errorMessage).css({marginLeft: "0px", marginTop: "-" + ($(errorMessage).outerHeight() + arrowHeight) + "px"});						
				}


				// Event Bindings
				$(this).blur(function (){	
					handlePopUp(validateInput($(this)),$(this));											  
				});
				// jquery can't find outerheight of elements with display none, and can't fade in/out elements with visibility, thus...	
				 $(errorMessage).css({visibility: "visible", display: "none"});
			});
			
			// Prevent form submission if invalid inputs exist
			$(this).submit(function(event){
				$(this).find(collection).each(function(){
					if (handlePopUp(validateInput($(this)),$(this))){
						event.preventDefault();				 
					}
				});
			});
		});
		

		// Plugin Methods
		function validateInput(obj) {		
			var isValid = true;
			inputValue = $(obj).val();
			if (inputValue == ""){
				if (!($(obj).hasClass("orEmpty"))){
					isValid = false;
				}
			} else {
				if ($(obj).hasClass("emailAddress")){ // validate for a valid email address
					isValid = regexCheck(inputValue,isEmail_re);
				} else if ($(obj).hasClass("int")){ 
					isValid = regexCheck(inputValue,isInt_re);
				} else if (($(obj).hasClass("phone"))){
					isValid = regexCheck(inputValue,isPhone_re);
				} else if (($(obj).hasClass("zip"))){
					isValid = regexCheck(inputValue,isZip_re);
				} 					
			}
			return isValid;
		}	
		
		function handlePopUp(isValid,obj) {		
			if (isValid){
				obj.next(".error-message").fadeOut(options.fadeSpeed);
				return false;
			} else {
				obj.next(".error-message").fadeIn(options.fadeSpeed);
				return true;
			}
		}	
		
		function regexCheck(value, re) { return String(value).search (re) != -1;}
	};  
})(jQuery);  



