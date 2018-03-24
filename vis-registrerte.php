<?php include("start.php"); ?>

<?php
include("db-tilkobling.php");
$sqlSetning="SELECT * FROM liste ORDER BY refid;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);


if ($antallRader==0){
    
    print ("<div class='meldingsBoks'>Det er ingen registrerte klasser enda</div>");
    
} else {
    
    $heisan = "nani";
    
    for($r = 1; $r <= $antallRader; $r++){
        $rad = mysqli_fetch_array($sqlResultat);
        
        $tonerid      = $rad["tonerID"];
        
        $refid        = $rad["refID"];
        $type         = $rad["type"];
        $hplaser      = $rad["hplaser"];
        $hpink        = $rad["hpink"];
        $nonhplaser   = $rad["nonhplaser"];
        $nonhpink     = $rad["nonhpink"];
        $samsunglaser = $rad["samsunglaser"];
        $others       = $rad["others"];
        
        $refid1 = substr($refid,0,8);
        $refid2 = substr($refid,-2);
        
        include("selectValues.php"); //Legger inn en del if-statements for at <select> skal forandre seg;
        
        print("<div class='container'>");
        
        print ("
        <form method='post' action='' id='endre' name='endre' onsubmit='return endreValidering()'> 
        <div class='panel panel-default'>
        <input type='hidden' name='tonerid' value='$tonerid'>
            <div class='row'>
                <div class='col-lg-9 col-xs-9'>
                    <div class='panel-body'>
                        <strong>TR - $refid1 - $refid2</strong><br>
                        T$type - $hplaser - $hpink - $nonhplaser - $nonhpink - $samsunglaser - $others
                    </div>
                </div>
                <div class='col-lg-3 col-xs-3'>
                    <button data-toggle='collapse' data-target='#demo$tonerid' style='margin-top:17.5px;' class='btn btn-warning btn-block' type='button' id='endre$refid' name='endre$refid'>Endre</button>
                </div>
                
            </div> 
            <div id='demo$tonerid' class='collapse'>
                    
                    
            <div class='row'>
                <div class='col-lg-2 col-xs-3 rowvenstre'>
                    <div class='form-group'>
                        <select class='form-control' id='type' name='type'>
                          $heisan
                        </select>
                    </div>
                </div>
                <div class='col-lg-10 col-xs-9 rowhoyre'>
                    <input class='form-control' type='text' id='refid' name='refid' placeholder='0378231221' value='$refid' maxlength='10'>
                </div>
            </div>
                
                <div class='row'>
                    <div class='col-lg-6 col-xs-6 rowvenstre'>
                        <input class='form-control' type='number' id='hplaser' name='hplaser' min=0 placeholder='HP-LASER' value='$hplaser'>
                    </div>

                    <div class='col-lg-6 col-xs-6 rowhoyre'>
                        <input class='form-control' type='number' id='hpink' name='hpink' min=0 placeholder='HP-INK' value='$hpink'>
                    </div>
                </div>

                <br>

                <div class='row'>
                    <div class='col-lg-6 col-xs-6 rowvenstre'>
                        <input class='form-control' type='number' id='nonhplaser' name='nonhplaser' min=0 placeholder='NON-HP-LASER' value='$nonhplaser'>
                    </div>
                    <div class='col-lg-6 col-xs-6 rowhoyre'>
                        <input class='form-control' type='number' id='nonhpink' name='nonhpink' min=0 placeholder='NON-HP-INK' value='$nonhpink'>
                    </div>
                </div>

                <br>

                <div class='row'>
                    <div class='col-lg-6 col-xs-6 rowvenstre'>
                        <input class='form-control' type='number' id='samsunglaser' name='samsunglaser' min=0 placeholder='SAMSUNG-LASER' value='$samsunglaser'>
                    </div>
                    <div class='col-lg-6 col-xs-6 rowhoyre'>
                        <input class='form-control' type='number' id='others' name='others' min=0 placeholder='OTHERS' value='$others'>
                    </div>
                </div>
                <br>
                <button onsubmit='return function sjekk()' id='endreKnapp' name='endreKnapp' class='btn btn-warning btn-block' type='submit'>Endre</button>
            </div>   
            </div>
        </div>
        </form>
        ");
    }
    
    print("</div>");
    
}

?>

<script>    
    function endreValidering(){
        var con = confirm("Er du sikker på at du har lyst til å gjøre endringer");
        if(con == true){
            return true;
        } else {
            return false;
        }
    }
</script>

<?php

if(isset($_POST["endreKnapp"])){
    $tonerid      = $_POST["tonerid"];
    
    $refid        = $_POST["refid"];
    $type         = $_POST["type"];
    $hplaser      = $_POST["hplaser"];
    $hpink        = $_POST["hpink"];
    $nonhplaser   = $_POST["nonhplaser"];
    $nonhpink     = $_POST["nonhpink"];
    $samsunglaser = $_POST["samsunglaser"];
    $others       = $_POST["others"];

    $sqlSetning = "
    UPDATE liste SET 
        refID='$refid', 
        type='$type', 
        hplaser='$hplaser', 
        hpink='$hpink', 
        nonhplaser='$nonhplaser', 
        nonhpink='$nonhpink',
        samsunglaser='$samsunglaser',
        others='$others'
        
    WHERE tonerID='$tonerid';";
    
    mysqli_query($db,$sqlSetning) or die ("<div class='meldingsBoks'>ikke mulig å endre data i databasen</div>");
}

?>