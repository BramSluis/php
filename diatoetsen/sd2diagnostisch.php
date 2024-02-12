<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="sd2diagnostisch.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <header> <h1>Christmas Greetings</h1> <nav>
   <li> <a href="#">Home</a> 
        <a href="#">Products</a>
        <a href="#">Company</a>
        <a href="#">Blog</a>
    </li> </nav></header>
    
    <main>
        <div id="left">
        
        
        <div id="leflorem"><h3>lorem</h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, illo.</div>
        <div id="lorem"><h3>lorem</h3> Lorem ipsum dolor sit amet. </div>
        <input type="button" value="learn more" > 
        </div>
        
        <div id="right">
            <form method="post">  
            <header><h3> newsletter sign in </h3></header>
         name:<input type="text" name="firstname" id="fn">
             lastname:<input type="text" name="lastname" id="ln">
             <br>
            mail: <input type="text" id="email">
            <br>        
            <br>how can we help?<input type="text" id="help" >
            <input type="submit">
            <?php 

if(isset($_POST[ "firstname"])){
    
echo "dankjewel voor de aanmelding:".  $_POST["firstname"];
}

?>
            </form>
            </div>
    </main>
</body>
</html>



