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
		let files = e.target.files;
		let filePath = $(this).val();
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
			let reader = new FileReader();
			let target = ""
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
});
