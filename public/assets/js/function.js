 

/*cropper start here*/


$(function () {

	var croppie = null;

	var el = document.getElementById('resizer');

	$.base64ImageToBlob = function (str) {

		var pos = str.indexOf(';base64,');
		var type = str.substring(5, pos);
		var b64 = str.substr(pos + 8);

		var imageContent = atob(b64);

		var buffer = new ArrayBuffer(imageContent.length);
		var view = new Uint8Array(buffer);

		for (var n = 0; n < imageContent.length; n++) {
			view[n] = imageContent.charCodeAt(n);
		}

		var blob = new Blob([buffer], {
			type: type
		});

		return blob;
	}

	$.getImage = function (input, croppie) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				croppie.bind({
					url: e.target.result,
				});
			}
			reader.readAsDataURL(input.files[0]);
		}
	}


	$("#upload").on("change", function (event) {

		$("#et-profile-image-modal").modal();

		croppie = new Croppie(el, {
			viewport: {
				width: 200,
				height: 200,
				type: 'circle'
			},
			boundary: {
				width: 250,
				height: 250
			},
			enableOrientation: true
		});

		$.getImage(event.target, croppie);

	});


	$("#et-crop-and-upload").on("click", function () {

		croppie.result('base64').then(function (base64) {
			$("#et-profile-image-modal").modal("hide");
			$("#et-profile-preview-image").attr("src", base64);
			$("#et-field-avatar").val(base64);
		});

	});

	$('#et-profile-image-modal').on('hidden.bs.modal', function (e) {
		// This function will call immediately after model close
		// To ensure that old croppie instance is destroyed on every model close
		setTimeout(function () {
			croppie.destroy();
		}, 100);
	})

	$(".rotate").on("click", function () {
		croppie.rotate(parseInt($(this).data('deg')));
	});



});



/*cropper end here*/
  

/*modal click change start here*/

$(function(){
	
    $('#delete-menu').on('click', function(){
        $('.delete-modal').modal('hide');
        $('.confirm-delete-modal').modal('show');
    });
	
	$('#login-2').on('click', function(){
        $('.bd-example-delete-modal-lg').modal('hide');
        $('.login-2-modal').modal('show');
    });

//    $('#vote-cancel-modal').on('click', function(){    
//        $('.vote-cancel-modal').modal('hide');
//        $('.vote-cancel-modal-2').modal('show');
//    }); 

}); 


/*modal click change end here*/



/*date picker start here*/

//
//$('#timepicker-1').timepicker({
//	uiLibrary: 'bootstrap4'
//});
//$('#timepicker-2').timepicker({
//	uiLibrary: 'bootstrap4'
//});

   $( document ).ready(function() {
     $(".dataTables_filter input").attr("placeholder", "Search");
   });

$('#datepicker-1').datepicker({
	uiLibrary: 'bootstrap4'
});
$('#datepicker-2').datepicker({
	uiLibrary: 'bootstrap4'
});
$('#datepicker-3').datepicker({
	uiLibrary: 'bootstrap4'
});
 $('#datepicker-4').datepicker({
            uiLibrary: 'bootstrap4'
});

/*


 $('#datepicker-5').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-6').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-7').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-8').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-9').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-10').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-11').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-12').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-13').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-14').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-15').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-16').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-17').datepicker({
            uiLibrary: 'bootstrap4'
}); 
$('#datepicker-18').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-19').datepicker({
            uiLibrary: 'bootstrap4'
});*/
/*date picker end here*/
