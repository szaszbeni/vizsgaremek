    <style>
body {
    background-image: url("kepek/hatter2.jpg");
    background-size:cover;
}

        #fejlec{
    box-sizing: border-box;
    height: 45px;
    padding: 20px 10px 10px;
    background-color:  #3d3c4d;
    display: flex;
    align-items: center;
    justify-content: space-between; 
}

nav ul li {
    display: inline;
    margin: 0 15px; 
}

nav ul li a {
    color: white; 
    text-decoration: none; 
    font-weight: bold; 
}

form {
    background-color: #3d3c4d;
    padding: 60px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: #c4c4c4;
    width: 400px;
    height: 400px;
    margin-top: 20px;
    margin-left: 400px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    height: 30px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #000000;
    color: #ccc;
}

form h1{
    font-size: 220%;
    text-align: center;
}

form h2 {
    font-size: 120%;
    font-weight: bold;
    display: block;
    margin-top: 18px;
}

form input[type="submit"] {
    background-color: #410000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    height: 40px;
    margin-top: 20px;
}

form input[type="submit"]:hover {
    background-color: #000000;
}

form input[type="button"] {
    background-color: #410000;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    height: 40px;
    margin-top: 30px;
}

form input[type="button"]:hover {
    background-color: #000000;
}

#result {
    margin-left: 20px;
    font-size:25px;
}
    </style>

<?php
    $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>
<h1>belsolap</h1>