<?php include("start.php") ?>
    
    <div class="container">
<form method="post" action="" id="registrer" name="registrer" onsubmit="return valideringJS()"> 
    <div class="row">
        
        <div class="col-lg-2 col-xs-3 rowvenstre">
            <div class="form-group">
                <select class="form-control" id="type" name="type">
                  <option value="2">T2</option>
                  <option value="1">T1</option>
                  <option value="T0">T0</option>
                  <option value="X">TX</option>
                </select>
            </div>
        </div>
        <div class="col-lg-10 col-xs-9 rowhoyre">
            <input class="form-control" type="number" id="refid" name="refid" placeholder="REF-ID" maxlength="10">
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6 col-xs-6 rowvenstre">
            <input class="form-control" type="number" id="hplaser" name="hplaser" min=0 placeholder="HP-LASER">
        </div>
        
        <div class="col-lg-6 col-xs-6 rowhoyre">
            <input class="form-control" type="number" id="hpink" name="hpink" min=0 placeholder="HP-INK">
        </div>
    </div>
    
    <br>
    
    <div class="row">
        <div class="col-lg-6 col-xs-6 rowvenstre">
            <input class="form-control" type="number" id="nonhplaser" name="nonhplaser" min=0 placeholder="NON-HP-LASER">
        </div>
        <div class="col-lg-6 col-xs-6 rowhoyre">
            <input class="form-control" type="number" id="nonhpink" name="nonhpink" min=0 placeholder="NON-HP-INK">
        </div>
    </div>
        
    <br>
    
    <div class="row">
        <div class="col-lg-6 col-xs-6 rowvenstre">
            <input class="form-control" type="number" id="samsunglaser" name="samsunglaser" min=0 placeholder="SAMSUNG-LASER">
        </div>
        <div class="col-lg-6 col-xs-6 rowhoyre">
            <input class="form-control" type="number" id="others" name="others" min=0 placeholder="OTHERS">
        </div>
    </div>
    
    <br>

    <button class="btn btn-default" type="button" id="tilbake" name="tilbake">Tilbake</button>
    <button class="btn btn-success pull-right" type="submit" id="registrerKnapp" name="registrerKnapp">Registrer</button>
</form>
        </div>

<script>

function valideringJS(){
    
    var refid = document.getElementById("refid").value;
    var type  = document.getElementById("type").value;
    
    if(!refid){
        document.getElementById("refid").style.border = "1px solid red";
        return false;
    }

    if(!type){
        alert("Det mangler type");
        return false;
    }
    
    if(refid.length != 10){
        alert("Referanse ID skal være akkurat 8 karakterer");
        return false;
    }
    
    var con = confirm("Sikker");
    if(con == false ){
        return false;
    }
}  
</script>
    
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
    
    include("registrer-laser-validering.php");
    
    if(!$refid || !$type){
        print("Det mangeler en referanse ID");
    } else {
        include("db-tilkobling.php");
        $sqlSetning = "INSERT INTO liste (refid,type,hplaser,hpink,nonhplaser,nonhpink,samsunglaser,others) VALUES('$refid','$type','$hplaser','$hpink','$nonhplaser','$nonhpink','$samsunglaser','$others');";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");
        print ("<div class='container'><div class='jumbotron'><h3>nå registrert</h3></div></div>");
    }
    
}
?>
</body>
</html>
