<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <title>AdminPage</title>
</head>

<style>
    body{ margin: 0 ; font-family: Tahoma;
        background-image: url("kepek/rhatter.png");}
    div#menu{
        background-color: black ;
        text-align: center ;
    }
    div#menu a {
        display: inline-block ;
        width: 200px ;
        text-decoration : none ;
        color : red ; 
    }
    div#menu a:hover{
        color: white;
    }


</style>
<body>
    <div id="menu">
        <a href = "./" target=_blank >AdminPage</a>
        <a href = "./?p=users"       >Users, Sign ins</a> 
        <a href = "./?p=chats"        >Chats</a>
        <a href = "./?p=feedback"     >Feedback</a>
        <a href = "./?p=settings"     >Settings</a>
    </div>

    <div id="tartalom">

    <?php
        if( isset($_GET['p']) ) $p = $_GET['p'];
        else $p ="" ;

        if( $p=="users"   )       include("users.php"   ); 
        if( $p=="chats"   )       include("chats.php"   );
        if( $p=="feedback" )      include("szerkezet.php");
        if( $p=="settings")       include("settings.php");
        
    ?>

    </div>
</body>
</html>