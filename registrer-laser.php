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

<div class="container">
  <div class="panel panel-default">
      <div class="panel-heading text-center">Registrer</div>
      <div class="panel-body">
          <form method="post" action="" id="registrer" name="registrer" id="registrer">
        <div class="row">
            <div class="testRight col-lg-1  col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4 col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="hp-laser" type="text" class="form-control" id="hplaser">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div>
           
            <div class="testRight col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4  col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="hp-ink" type="text" class="form-control" id="hpink">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div> 
        </div>
        
          <div class="row">
            <div class="testRight col-lg-1  col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4 col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="non-hp-laser" type="text" class="form-control" id="nonhplaser">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div>
           
            <div class="testRight col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4  col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="non-hp-ink" type="text" class="form-control" id="nonhpink">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div> 
        </div>
          
          <div class="row">
            <div class="testRight col-lg-1  col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4 col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="samsung-laser" type="text" class="form-control" id="samsunglaser">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div>
           
            <div class="testRight col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-success btn-block">+</button>
            </div>
            <div class="testLeft testRight col-lg-4  col-sm-4 col-xs-2">
                <div class="form-group">
                    <input placeholder="other" type="text" class="form-control" id="other">
                </div>
            </div>
            <div class="testLeft col-lg-1 col-sm-1 col-xs-2">
                <button type="button" class="btn btn-danger btn-block">-</button>
            </div> 
        </div>
            
          <button type="submit" class="btn btn-defualt">Registrer</button>
          </form>
      </div>
      
    </div>
</div>
    
<?php 
if(isset($_POST["registrer"])){
    $hplaser = $_POST["hplaser"];
    $hpink = $_POST["hpink"];
    $nonhplaser = $_POST["nonhplaser"];
    $nonhpink = $_POST["nonhpink"];
    $samsunglaser = $_POST["samsunglaser"];
    $other = $_POST["other"];
    
    include("db-tilkobling.php");
    $sqlSetning="INSERT INTO liste (hplaser,hpink,nonhplaser,nonhpink,samsunglaser,other) VALUES('$hplaser','$hpink','$nonhplaser','$nonhpink','$samsunglaser','$other');";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");
    }
?>
</body>
</html>
