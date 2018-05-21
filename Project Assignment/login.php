<?php
    include_once("guestNav.php");
    include_once("loginCode.php"); 
    if(isset($_POST['submit'])){
        require_once("functions.php");
        $Username = $_POST['username'];
        $Password = $_POST['pass'];    
        require_once("functions.php");
        if((!empty($Username)) && (!empty($Password))){
            $connection = connectToMYSQLAcc();
            $query = "select count(*) from account_table";
            $result = mysqli_query($connection,$query) or die("Error in query: ".mysqli_error($connection));
            $row = mysqli_fetch_row($result);
            $count = $row[0];

           if($count > 0){
                echo "Logged In!";
            }else{
                echo "Not logged in :(";
            }
        }  
    }

?>