function checkForm(form)

  //username
  {
    if(form.username.value == "") {
      alert("Error: username tidak boleh kosong!");
      form.username.focus();
      return false;
    }
    if(form.username.value.length < 8) {
        alert("Error: username harus mengandung setidaknya 8 karakter!!");
        form.username.focus();
        return false;
      }
    re = /[a-z]/;
      if(!re.test(form.username.value.value)) {
        alert("Error: username harus mengandung huruf kecil (a-z)!");
        form.username.focus();
        return false;
      }
  
    


    //password
    if(form.pwd1.value != "" ) {
     
      if(form.pwd1.value.length < 8) {
        alert("Error: password harus mengandung setidaknya 8 karakter!!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password harus mengandung angka (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password harus mengandung hurufkecil (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password harus mengandung huruf besar (A-Z)!");
        form.pwd1.focus();
        return false;
      }
       re = /^\w+$/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password harus berisi huruf, angka, dan karakter spesial !");
        form.pwd1.focus();
        return false;
      }
    }else {
      alert("Error: isi password terlebih dahulu");
      form.pwd1.focus();
      return false;
    }
    alert("Password Benar: " + form.pwd1.value);
    return true;
  }