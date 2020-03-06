<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password=$_POST['password'];


        // include database connection file
        include_once("../user/config.php");

        //insert data ke user
        $result = mysqli_query($mysqli, "INSERT INTO user(nama,email,username,password,hak_akses) VALUES('$nama','$email','$username','$password','user')");

      //mrnunjukkan pesan apabila proses menambahkan berhasil 
        header("location:index.php");
    }
    ?>