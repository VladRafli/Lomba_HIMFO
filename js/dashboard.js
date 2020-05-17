$(document).ready(function() {
	$(".file-info .file-name").html("Nama File");
	$(".file-info .file-url").html("URL File");
	$(".file-info .file-category").html("-Kategori File-");
	$(".upload-button").prop("disabled", true);
	$("#verify").click(function() {
		if($(this).is(":checked")) {
			$(".upload-button").prop("disabled", false);
		} else {
			$(".upload-button").prop("disabled", true);
		}
	}) 
	$(".file-drop-area input[type='file']").change(function(e) {
		$(".file-info .file-name").html("");
		$(".file-info .file-url").html("");
		$(".file-info .file-category").html("");
		let files = e.target.files;
		let filePath = $(this).val();
		$.each(files, function (i, file) {
			$(".file-info .file-name").append(file.name+",");
			$(".file-info .file-url").append(filePath+",");
			$(".file-info .file-category").append(file.type+",");
		});
	});
	$("button[type='reset'").click(function(e) {
		$(".file-info .file-name").html("Nama File");
		$(".file-info .file-url").html("URL File");
		$(".file-info .file-category").html("-Kategori File-");
	});
});
