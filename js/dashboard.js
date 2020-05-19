$(document).ready(function () {
	// Upload File 
	$(".file-info .file-name").html("Nama File");
	$(".file-info .file-url").html("URL File");
	$(".file-info .file-category").html("-Kategori File-");
	$(".upload-button").prop("disabled", true);

	$("#verify").click(function () {
		if ($(this).is(":checked")) {
			$(".upload-button").prop("disabled", false);
		} else {
			$(".upload-button").prop("disabled", true);
		}
	});

	$(".file-drop-area input[type='file']").change(function (e) {
		$(".file-info .file-name").html("");
		$(".file-info .file-url").html("");
		$(".file-info .file-category").html("");
		var files = e.target.files;
		var filePath = $(this).val();
		$.each(files, function (i, file) {
			$(".file-info .file-name").append(file.name + ",");
			$(".file-info .file-url").append(filePath + ",");
			$(".file-info .file-category").append(file.type + ",");
		});
	});

	$(".cancel-button").click(function (e) {
		$(".file-info .file-name").html("Nama File");
		$(".file-info .file-url").html("URL File");
		$(".file-info .file-category").html("-Kategori File-");
	});

	// Upload Profile Pict 
	function previewPict(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			var target = ""
			switch (input.name) {
				case "fotoKetua":
					target = ".foto-profil-ketua";
					break;

				case "fotoAnggota1":
					target = ".foto-profil-Anggota1";
					break;

				case "fotoAnggota2":
					target = ".foto-profil-Anggota2";
					break;

				default:
					break;
			}
			reader.onload = function (e) {
				$(target).attr("src", e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$(".edit-profile-pict #inputFile").change(function () {
		previewPict(this);
	});

	// Change Password - New Password Confirmation
	$(".change-button").prop("disabled", true);
	$(".invalid .fas, .invalid p").hide();	
	$(".empty .fas, .empty p").hide();
	$(".valid .fas, .valid p").hide();

	function validate() {
		var password = $("#password1").val();
		var confirmPassword = $("#password2").val();
		return ((password === confirmPassword) && password.length > 0 && confirmPassword.length > 0) ? true : false;
	}  

	$("#password1").on("input", function () {
		if(this.value.length <= 0 && $("#password2").val().length <= 0) {
			$(".empty .fas, .empty p").show();
			$(".invalid .fas, .invalid p").hide();	
			$(".valid .fas, .valid p").hide();
			$(".change-button").prop("disabled", true);
		} else {
			if(validate()) {
				$(".change-button").prop("disabled", false);
				$(".invalid .fas, .invalid p").hide();	
				$(".empty .fas, .empty p").hide();
				$(".valid .fas, .valid p").show();
			} else {
				$(".change-button").prop("disabled", true);
				$(".invalid .fas, .invalid p").show();	
				$(".empty .fas, .empty p").hide();
				$(".valid .fas, .valid p").hide();
			}
		}
	});

	$("#password2").on("input", function () {
		if(this.value.length <= 0 && $("#password1").val().length <= 0) {
			$(".empty .fas, .empty p").show();
			$(".invalid .fas, .invalid p").hide();	
			$(".valid .fas, .valid p").hide();
			$(".change-button").prop("disabled", true);
		} else {
			if(validate()) {
				$(".change-button").prop("disabled", false);
				$(".invalid .fas, .invalid p").hide();	
				$(".empty .fas, .empty p").hide();
				$(".valid .fas, .valid p").show();
			} else {
				$(".change-button").prop("disabled", true);
				$(".invalid .fas, .invalid p").show();	
				$(".empty .fas, .empty p").hide();
				$(".valid .fas, .valid p").hide();
			}
		}
	});
});
