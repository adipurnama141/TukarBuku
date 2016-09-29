function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}


function validateLogin() {
	if (document.loginForm.username.value == "")
	{
		alert("Masukkan username!");
		document.loginForm.username.focus();
		return false;
	}

	if (document.loginForm.password.value == "")
	{
		alert("Masukkan password!");
		document.loginForm.password.focus();
		return false;
	}
	return true;
}

function validateAddProduct() {
	if (document.loginForm.product_name.value == "")
	{
		alert("Masukkan nama produk!");
		document.loginForm.product_name.focus();
		return false;
	}

	if (document.loginForm.product_desc.value == "")
	{
		alert("Masukkan deskripsi produk!");
		document.loginForm.product_desc.focus();
		return false;
	}

	if (document.loginForm.product_desc.value.length > 200)
	{
		alert("Deskripsi produk harus kurang dari 200 karakter!");
		document.loginForm.product_desc.focus();
		return false;
	}

	if (document.loginForm.price.value == "")
	{
		alert("Masukkan harga!");
		document.loginForm.price.focus();
		return false;
	}

	if (!isNumeric(document.loginForm.price.value))
	{
		alert("Harga barang harus integer");
		document.loginForm.price.focus();
		return false;
	}

	if (document.loginForm.photo.value == "")
	{
		alert("Masukkan foto barang!");
		document.loginForm.photo.focus();
		return false;
	}


	return true;
}



function validateRegister() {
	if (document.loginForm.fullname.value == "")
	{
		alert("Masukkan nama lengkapmu.");
		document.loginForm.fullname.focus();
		return false;
	}

	if (document.loginForm.username.value == "")
	{
		alert("Masukkan username!");
		document.loginForm.username.focus();
		return false;
	}

	if (document.loginForm.email.value == "")
	{
		alert("Masukkan email!");
		document.loginForm.email.focus();
		return false;
	}

	if (document.loginForm.password.value == "")
	{
		alert("Masukkan password!");
		document.loginForm.password.focus();
		return false;
	}

	if (document.loginForm.password2.value == "")
	{
		alert("Masukkan password!");
		document.loginForm.password2.focus();
		return false;
	}

	if (document.loginForm.password.value != document.loginForm.password2.value )
	{
		alert("Kedua password tidak sama");
		document.loginForm.password2.focus();
		return false;
	}

	if (document.loginForm.address.value == "")
	{
		alert("Masukkan alamat!");
		document.loginForm.address.focus();
		return false;
	}

	if (document.loginForm.postal.value == "")
	{
		alert("Masukkan kode pos!");
		document.loginForm.postal.focus();
		return false;
	}

	if (document.loginForm.phone.value == "")
	{
		alert("Masukkan nomor telepon!");
		document.loginForm.phone.focus();
		return false;
	}

	

	var email = document.loginForm.email.value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(email) == false) {
    	alert("Masukkan alamat email yang valid!");
    	document.loginForm.email.focus();
    	return false;
    }

	return true;
}

function validatePurchase() {
	if (document.loginForm.qty.value == "")
	{
		alert("Masukkan jumlah barang!");
		document.loginForm.qty.focus();
		return false;
	}

	if (document.loginForm.consignee.value == "")
	{
		alert("Masukkan nama penerima!");
		document.loginForm.consignee.focus();
		return false;
	}

	if (document.loginForm.address.value == "")
	{
		alert("Masukkan alamat penerima!");
		document.loginForm.address.focus();
		return false;
	}

	if (document.loginForm.postal_code.value == "")
	{
		alert("Masukkan kode pos!");
		document.loginForm.postal_code.focus();
		return false;
	}


	if (document.loginForm.phone_number.value == "")
	{
		alert("Masukkan nomor teleponpenerima!");
		document.loginForm.postal_code.focus();
		return false;
	}

	if (document.loginForm.card_number.value == "")
	{
		alert("Masukkan kartu kredit!");
		document.loginForm.postal_code.focus();
		return false;
	}

	if (document.loginForm.card_verification.value == "")
	{
		alert("Masukkan card verification!");
		document.loginForm.postal_code.focus();
		return false;
	}

	if (!isNumeric(document.loginForm.card_number.value))
	{
		alert("Card verification harus terdiri dari angka!");
		document.loginForm.card_number.focus();
		return false;
	}

	if (!isNumeric(document.loginForm.card_verification.value))
	{
		alert("Card verification harus terdiri dari angka!");
		document.loginForm.card_verification.focus();
		return false;
	}

	if (document.loginForm.card_number.value.length != 12)
	{
		alert("Card number harus 12 digit!");
		document.loginForm.postal_code.focus();
		return false;
	}

	if (document.loginForm.card_verification.value.length != 3)
	{
		alert("Card verification harus 3 digit!");
		document.loginForm.postal_code.focus();
		return false;
	}







	return true;
}