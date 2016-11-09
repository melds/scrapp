$(function(){

  $(document).ready(function(){
    $('.edit-trigger').leanModal({dismissible: true, // Modal can be dismissed by clicking outside of the modal
		opacity: .5, // Opacity of modal background
		in_duration: 200, // Transition in duration
		out_duration: 200, // Transition out duration
		ready: function() { $('#call_back_link').val(window.location) },
		complete: function() {}
		});
    $('.add-trigger').leanModal({dismissible: true, // Modal can be dismissed by clicking outside of the modal
		opacity: .5, // Opacity of modal background
		in_duration: 200, // Transition in duration
		out_duration: 200, // Transition out duration
		ready: function() { $('#add_call_back_link').val(window.location);
                        $('#add_fname').focus();
    },
		complete: function() {}
		});

		$('select').material_select();
  });

});
