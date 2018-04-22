<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <body>
   
  <title>Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#e6e6e6">
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   $servername = "sql2.njit.edu";
  $username = "jcm44";
  $password = "lq40ntX5";
  $dbname = "jcm44";
    
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo "Connected Successfully! <br>";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $email = $_SESSION["email"];
    $task = ($_POST["task"]);
    $ddate = ($_POST["ddate"]);
    $cdate = ($_POST["cdate"]);
    $isdone = 0;

    $query = "INSERT INTO todos (owneremail, createddate, duedate, message, isdone)
              VALUES ('$email', '$cdate', '$ddate', '$task', '$isdone')";
    $statement = $conn->prepare($query);
    $statement->execute();
	header( 'Location: MortalCombat.php' );
    } 
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
}
?>
  
  
<div style="margin-top:120px">
<div id="main" style="width:400px; margin:auto; ">
  <h2 id="hey "style="text-align:center; font-family: 'Press Start 2P'; color: white;">Add Task</h2>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label for="task">Task:</label>
      <input type="text" class="form-control" id="task" placeholder="What needs to be done?" name="task">
    </div>
  <div class="form-group">
      <label for="cdate">Todays Date:</label>
      <input type="date" class="form-control" id="cdate" name="cdate">
    </div>
  <div class="form-group">
      <label for="ddate">Due Date:</label>
      <input type="date" class="form-control" id="ddate" name="ddate">
    </div>
      <button
    <button
    <button id="button" type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
</div>
</div>

</body>
</html>
<style>
  html{
  font-family:'Press Start 2P';
}
label{
  font-family: Work Sans;
  font-size: 20px;
  color: white;
  margin-left: 15px;
}
button.btn.btn-primary.btn-block{
  font-family:'Press Start 2P';
}
body{
  
    background-image: url("https://i.gifer.com/1Sql.gif");

}
  #hey {
    color: white;
  }
  #main {
  background-color: rgba(255, 78, 57, .9);            padding-top: 10px;
  margin: auto;
    border: 4px dashed white;
  }
  #button {
    color: rgba(255, 78, 57);
    background-color: white;
      width: 150px;
    margin-left: 115px;

  }
  #button:hover{
    color: white;
    background-color: rgba(255, 78, 57, .9);
    transition: 1s;
    border: 1px dashed white;
  }
</style>