<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $op = test_input($_POST["op"]);
   
    }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form action="" method="post">
        Hallo <?php echo $name ?> <br>
       naam  <input type="text" id="name" name="name" placeholder=<?php echo $name ?>>
       <?php if (empty($_POST["name"])) {
    echo "Naam niet ingevult";} ?> <br> 
        email <input type="text" name="email" placeholder=<?php echo $email ?>> <?php if (empty($_POST["email"])) {
    echo "email niet ingevult";} ?><br> <br>
         <input type="hidden"  name="op" value="false" > geslacht
         <input type="radio" name="op" value="L" onclick="red()" required > L
         <input type="radio" name="op" value="H" onclick="blue()" required> H 
         <input type="radio" name="op" value="B" onclick="pink()" required> B
         <input type="radio" name="op" value="t" onclick="yellow()" required> T
         <input type="radio" name="op" value="m" onclick="black()" required> B
         <input type="radio" name="op" value="V" onclick="orange()" required> V <br>
         <script>
function red () {
        document.body.style.backgroundColor = "red";
    }
    function blue () {
        document.body.style.backgroundColor = "blue";
    }
    function pink () {
        document.body.style.backgroundColor = "pink";
    }
    function yellow () {
        document.body.style.backgroundColor = "yellow";
    }
    function black () {
        document.body.style.backgroundColor = "black";
    }
    function orange () {
        document.body.style.backgroundColor = "orange";
    }
</script>


         <label for="myCheck">Wil u beordelen</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()">
<input type="submit" name="submit" value="versturen">


<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
    
  } else {
     text.style.display = "none";
     
  }
}
</script>


<p id="text" style="display:none">Beoordeling: 

<input type="radio" id="bo1" name="beoordeling" value="Slecht" checked>slecht
  <input type="radio" id="bo2" name="beoordeling" value="Matig">matig
  <input type="radio" id="bo3" name="beoordeling" value="Goed">goed
  <input type="radio" id="bo4" name="beoordeling" value="Heel goed">heel Goed</p>

        
</form>

<?php 

 echo "<br>uw geslacht is"; echo $op ;
?>


</body>
<script src="index.js"></script>
</html>