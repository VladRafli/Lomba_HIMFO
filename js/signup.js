$(document).ready(function() {
	$("#inputJumlahAnggota").change(function() {
		$(".anggota").empty();
		let jumlah = this.value;
		console.log(jumlah);		
		for(let x=1; x<=jumlah; x++) {
			$(".anggota").append(
				"<div><p class='m-0'>Anggota ke-" + x + "</p><label for='inputNama' class='sr-only'>Nama Lengkap</label><input type='text' id='inputNama' name='nama" + x + "' class='form-control' placeholder='Nama Lengkap' required /> <label for='inputEmail' class='sr-only'>Email</label> <input type='email' id='inputEmail' name='email" + x + "' class='form-control' placeholder='Email' required /> <div class='custom-file text-left'> <input type='file' class='custom-file-input form-control' id='inputFile' name='file" + x + "' required /> <label class='custom-file-label' for='inputFile'>Upload Kartu Pelajar</label></div></div>"
			);
		}
	});
});
