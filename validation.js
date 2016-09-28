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