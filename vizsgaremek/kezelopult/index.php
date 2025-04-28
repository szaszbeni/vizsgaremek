<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="vizsga.css">
    <title>AdminPage</title>
</head>

<style>
    body{ margin: 0 ; font-family: Tahoma;
        background-image: url("../kepek/hatter3.jpeg");
    }
    div#menu{
        background-color: #3d3c4d ;
        text-align: center ;
    }
    div#menu a {
        display: inline-block ;
        width: 200px ;
        height: 30px;
        text-decoration : none ;
        color : white ; 
    }
    div#menu a:hover{
        color: grey;
    }


</style>
<body>
    <div id="menu">
        <a href = "./?p=users"       >Users, Sign ins</a>
        <a href = "./?p=feedback"     >Üzenőfal</a>
        <a href = "./?p=settings"     >Settings</a>
    </div>

    <div id="tartalom">

    <?php
        if( isset($_GET['p']) ) $p = $_GET['p'];
        else $p ="" ;

        if( $p=="users"   )       include("users.php"   ); 
        if( $p=="feedback" )      include("szerkezet.php");
        if( $p=="settings")       include("settings.php");
        
    ?>

    </div>
</body>
</html>