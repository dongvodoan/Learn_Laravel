$(document).ready(function(){ 

	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#image_no').show();
	            $('#image_no').attr('src', e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$("#image").on('change', function(){
	    readURL(this);
	});
});
