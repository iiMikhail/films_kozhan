$(document).ready(function(){
	$('#error').hide();
	$('.err-type').hide();
	$('.err-year').hide();
	var film = (function(){
		var init = function(){
		_setUpListeners();
		console.log("init");
		}
	var _setUpListeners = function() {
		$('.button').on('click', function(event) {
		    validate(event);
		    console.log("_setUpListeners");
		});
	}
	var validate = function(event) {
		if( ( $('.film-title').val().trim() == '' ) ) {
		    event.preventDefault();
		    $('#error').show();
		} else if ( $('.film-type').val().trim() == '' ) {
		    event.preventDefault();
		    $('#error').hide();
		    $('.err-type').show();
		  }  else if ( $('.film-year').val().trim() == '' ) {
		        event.preventDefault();
				$('#error').hide();
				$('.err-type').hide();
				$('.err-year').show();
		     }	else {
					$('#error').hide();
					$('.err-type').hide();
					$('.err-year').hide();
		        }
		    }
		    return {
		        init
		    }
		}());
		film.init();
});