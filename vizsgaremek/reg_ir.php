<?php
    include( "kapcsolat.php" ) ;
    //print_r( $_POST ) ;

    
    if ( $_POST['uname']=="") {
        print("<script> alert('Nem adtál meg felhasználónevet') window.history.back();</script>");
        exit();
    }
    

    if ( $_POST["uemail"]=="") {
        print("<script> alert('Nem adtál meg Email címet') window.history.back();</script>");
        exit();
    }
    

    if ( $_POST["pass"]=="") {
        print("<script> alert('Nem adtál meg jelszót') window.history.back();</script>");
        exit();
    }
    

    $username = $_POST['uname'];
    $sql = "SELECT * FROM user WHERE uname = '$username'";
    $result = mysqli_query($adb, $sql);
	if($result->num_rows > 0) {
        echo "<script>alert('Már van ilyen név!'); window.history.back();</script>";
        exit();
    }
    

    //var_dump($adb);
    $upass = md5($_POST["pass"]);
    $stmt = mysqli_prepare($adb, "INSERT INTO user (uname, uemail, upass, utime) VALUES (?, ?, ?, NOW())");
    mysqli_stmt_bind_param($stmt, "sss", $_POST['uname'], $_POST['uemail'], $upass);
    mysqli_stmt_execute($stmt);
    
    
    header("Location: login_form.php");
    mysqli_close( $adb );
    exit();
?>
