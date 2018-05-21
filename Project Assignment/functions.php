<?php
    function connectToMYSQL(){
        $conn = mysqli_connect("localhost","root","","bass_schema") or die ('Error connecting to the database');
        return $conn;
    }
    
    function connectToMYSQLAcc(){
        $conn = mysqli_connect("localhost","root","","account_schema") or die ('Error connecting to the database');
        return $conn;
    }

?>