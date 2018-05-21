<form method="post" action="register.php">
    <div class="form-row justify-content-md-center">
        <div class="col-md-2 mb-3">
            <label>First Name:</label>
            <input type="text" name="name" placeholder="Your Name" class="form-control" required>
        </div>
        <div class="col-md-2 mb-3">
            <label>Last Name:</label>
            <input type="text" name="surname" placeholder="Your Surname" class="form-control" required>
        </div>
        </div>
        <div class="form-row justify-content-md-center">
            <div class="col-md-2 mb-3">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Enter a Username" class="form-control" required>
            </div>
            <div class="col-md-2 mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="example@exampleMail.com" required>
            </div>
        </div>
        <div class="form-row justify-content-md-center">
            <div class="col-md-2 mb-3">
                <label>Password:</label>
                <input type="password" name="pass" placeholder="Enter a password" class="form-control" required>
            </div>
            <div class="col-md-2 mb-3">
                <label>Confirm Password:</label>
                <input type="password" name="passConfirm" placeholder="Enter a password" class="form-control" required>
            </div>
        </div>
        <div class="form-row justify-content-md-center">
            <div class="col-md-2 mb-3">
                <label for="validationDefault04" style="color:transparent">g</label>
                <button name="submit" type="submit" class="form-control btn btn-primary btn-md">Register</button>
        </div>
    </div>
</form>
<?php
    if(isset($_POST['submit'])){
        require_once("functions.php");
        $fName = $_POST['name'];
        $lName = $_POST['surname'];
        $Username = $_POST['username'];
        $Password = $_POST['pass'];
        $PasswordConfirm = $_POST['passConfirm'];
        $Email = $_POST['email'];
        if((!empty($fName)) && (!empty($lName)) && (!empty($Username)) && (!empty($Password)) && (!empty($Email))){
            if($Password == $PasswordConfirm){
                $connection = connectToMYSQLAcc();
                $query = "INSERT INTO account_table(firstName,lastName,username,pass,email) VALUES ('$fName','$lName','$Username','$Password','$Email')";
                $result = mysqli_query($connection,$query) or die("Error in query: ".mysqli_error($conn));
                echo "<script>location.replace('index.php');</script>";
            }else{
                echo("Passwords Do Not Match");
            }
        }
    }
?>