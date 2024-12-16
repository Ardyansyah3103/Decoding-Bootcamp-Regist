<?php
include_once "config.php";

//ambil data form 
if($_POST){
    //variable
    $username=$_POST['user'];
    $pwd=md5($_POST['pwd']);
    // create sql utk ambil data db
    $sql="SELECT * FROM user WHERE username='$username' AND pwd='$pwd' LIMIT 1";

    //query db
    $query=mysqli_query($koneksi, $sql)or die ("SQL Error, $sql");
    //ambil jumlah record hasil query 
    $jmldata=mysqli_num_rows($query);
    // check jml data. if x > 0 then data is Exist and successfuly Login and otherwise
    if($jmldata > 0){
        $data=mysqli_fetch_assoc($query);
        // session activate
        session_start();
        // session variable 
        $_SESSION['id']=session_id();
        $_SESSION['nama']=$data['nama'];
        $_SESSION['level']=$data['level'];
        $_SESSION['email']=$data['email'];
        //redirect ke page DASHBOARD (dashboard.php)
        header("location:dashboard.php");
    } else {
        echo "<script>
            alert('Login tidak berhasil, mohon coba lagi');
            window.location.assign('formLogin.php');
        </script>";
    }  
}

?>