function validasi(){
  var username = document.getElementById("username").value;
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var negara = document.getElementById("negara").value;
  var pass = document.getElementById("password").value;
  var conf = document.getElementById("confirm-password").value;


if( username === ""){
 alert("Username tidak boleh kosong");
} else if(nama === ""){
 alert("Nama tidak boleh kosong")
 return false;
}else if(email === ""){
 alert("Email tidak boleh kosong")
}else if (negara === ""){
 alert("Negara tidak boleh kosong")
}else if(pass === "" ){
 alert("Password tidak boleh kosong");
} else if(conf === ""){
 alert("Konfirmasi Password tidak boleh kosong");
} else if(pass != conf){
 alert("Password dan Konfirmasi Password tidak cocok")
}else {
 alert("Anda berhasil mendaftar sebagai pemandu, silahkan tunggu kabar selanjutnya")
}
}