<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .testLeft{
            padding-left: 0;
        }
        
        .testRight{
            padding-right: 0;
        }
        
    
    </style>
</head>
<body>
    
<form method="post" action="" id="registrer" name="registrer"> 
    <label for="refid">Referenasenummer:</label>
    <input type="text" id="refid" name="refid" placeholder="03757564-32">
    <br>
    <label for="type">Type:</label>
    <input type="text" id="type" name="type" placeholder="T2">
    <br><br>
    <label for="hplaser">HP-laser:</label>
    <input type="number" id="hplaser" name="hplaser" value=0 min=0>
    <br>
    <label for="hpink">HP-ink:</label>
    <input type="number" id="hpink" name="hpink" value=0 min=0>
    <br>
    <label for="nonhplaser">Non-HP-laser:</label>
    <input type="number" id="nonhplaser" name="nonhplaser" value=0 min=0>
    <br>
    <label for="nonhpink">Non-HP-ink:</label>
    <input type="number" id="nonhpink" name="nonhpink" value=0 min=0>
    <br>
    <label for="samsunglaser">Samsung-laser:</label>
    <input type="number" id="samsunglaser" name="samsunglaser" value=0 min=0>
    <br>
    <label for="others">Others:</label>
    <input type="number" id="others" name="others" value=0 min=0>
    <br>
    <button type="submit" id="registrerKnapp" name="registrerKnapp">Registrer</button>
    <button type="reset" id="nullstill" name="nullstill">Nullstill</button>
</form>

<?php 
if(isset($_POST["registrerKnapp"])){
    $refid        = $_POST["refid"];
    $type         = $_POST["type"];
    $hplaser      = $_POST["hplaser"];
    $hpink        = $_POST["hpink"];
    $nonhplaser   = $_POST["nonhplaser"];
    $nonhpink     = $_POST["nonhpink"];
    $samsunglaser = $_POST["samsunglaser"];
    $others       = $_POST["others"];
    
    include("db-tilkobling.php");
        $sqlSetning = "INSERT INTO liste (refid,type,hplaser,hpink,nonhplaser,nonhpink,samsunglaser,others) VALUES('$refid','$type','$hplaser','$hpink','$nonhplaser','$nonhpink','$samsunglaser','$others');";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");
        print ("nå registrert");
}
?>
    
    
</body>
</html>
