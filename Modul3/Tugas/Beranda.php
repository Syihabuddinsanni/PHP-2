<?php
   
 $user = $_POST['user'];
 $pass = $_POST['user'];

 if($user == "Admin" && $pass == "Admin" ){
     echo "<strong>WELCOME ADMIN !! </strong>anda berhasil login";
 } else {
     echo "<strong>Login Failed ! </strong>coba cek username dan password anda, TERJADI KESALAHAN";
 }

// DI HALAMAN 136 di Modul
?>