<?php
include("start.php");
?>



<div class="container">
    <form method="post" action="" id="registrer" name="registrer" onsubmit="return verdisjekk()"> 
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <select class="form-control">
                    <option>Bjørn Martin</option>                
                    <option>Jonas</option>                
                </select>
                <input class="form-control" type="text" id="navn" name="navn" min=0 placeholder="NAVN">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input class="form-control" type="date" id="dato" name="dato" min=0 placeholder="HP-LASER">
            </div>
        </div>
        <br>
        <div class="row">        
            <div class="col-lg-6 col-xs-6 rowvenstre">
                <input class="form-control" type="time" id="tidfor" name="tidfor" min=0 placeholder="HP-LASER">
            </div>

            <div class="col-lg-6 col-xs-6 rowhoyre">
                <input class="form-control" type="time" id="tidetter" name="tidetter" min=0>
            </div> 
        </div>
        <br>
        <button class="btn btn-default" type="button" id="tilbake" name="tilbake">Tilbake</button>
        <button class="btn btn-success pull-right" type="submit" id="registrerKnapp" name="registrerKnapp">Registrer</button>
    </form>
    <br>
</div>

<script>
    //Skriver ut datoen i dag i inputfeltet\\
    document.getElementById('dato').valueAsDate = new Date();
</script>

<?php
    if(isset($_POST["registrerKnapp"])){
    $brukernavn = $_POST["navn"];
    $dato       = $_POST["dato"];
    $tidfor     = $_POST["tidfor"];
    $tidetter   = $_POST["tidetter"];
        
    //Hentet fra StackOverflow
    $datetime1 = new DateTime($tidfor);//start time
    $datetime2 = new DateTime($tidetter);//end time
    
    if($datetime1 > $datetime2){ //sjekker at hvis man 
        print("<div class='container'><div class='jumbotron'>Du har skrevet inn klokkeslettene feil</div></div>");
        return false;
    } else {
        $interval = $datetime1->diff($datetime2);
        $timedif = $interval->format('%H Timer %i Minutter');//days hours minutes
    }
    
    if(!$brukernavn || !$dato || !$tidfor || !$tidetter){
        print("det mangler info");
    } else {
        include("db-tilkobling.php");
        $sqlSetning = "INSERT INTO bruker(brukernavn,dato,tidfor,tidetter) VALUES ('$brukernavn','$dato','$tidfor','$tidetter');";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");
        print ("
        <div class='container'>
            <div class='jumbotron'>
                <h4>Du har nå registrert en liste</h4><br>
                <strong>bruker:</strong> $brukernavn<br>
                <strong>Dato:</strong> $dato<br> 
                <strong>Fra klokken:</strong> $tidfor til $tidetter<br> 
                <strong>Tid brukt er:</strong> $timedif
            </div>
        </div>");
    }
    }
    
?>