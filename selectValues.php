<?php
    if($type == "2"){
        $heisan = "
        <option selected id='value2' value='2'>T2</option>
        <option id='value1' value='1'>T1</option>
        <option id='value0' value='0'>T0</option>
        <option id='valueX' value='X'>TX</option>";
        }
        
    if($type == "1"){
        $heisan = "
        <option id='value2' value='2'>T2</option>
        <option selected id='value1' value='1'>T1</option>
        <option id='value0' value='0'>T0</option>
        <option id='valueX' value='X'>TX</option>";
    }

    if($type == "0"){
        $heisan = "
        <option id='value2' value='2'>T2</option>
        <option id='value1' value='1'>T1</option>
        <option selected id='value0' value='0'>T0</option>
        <option id='valueX' value='X'>TX</option>";
    }

    if($type == "X"){
        $heisan = "
        <option id='value2' value='2'>T2</option>
        <option id='value1' value='1'>T1</option>
        <option id='value0' value='0'>T0</option>
        <option selected id='valueX' value='X'>TX</option>";
    }
?>