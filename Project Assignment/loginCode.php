<?php session_start(); ?>
<form style="margin-top:50px;" method="post" action="loginCode.php">
    <div class="form-row justify-content-md-center">
        <div class="col-md-2 mb-3">
            <label for="validationDefault01">Username:</label>
            <input type="text" name="username" placeholder="Enter a Username" class="form-control" required>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationDefault02">Password:</label>
            <input type="password" name="pass" placeholder="Enter a password" class="form-control" required>
        </div>
        <div class="col-md-1 mb-3">
            <label for="validationDefault04" style="color:transparent">g</label>
            <button name="submit" type="submit" class="form-control btn btn-primary btn-md">Login</button>
        </div>
        <div class="col-md-1 mb-3">
            <label for="validationDefault04" style="color:transparent">g</label>
            <button name="submit" type="submit" onclick="forgot()" class="form-control btn btn-primary btn-md">Forgot Password</button>
        </div>
    </div>
</form>
<?php 
    if(isset($_POST['submit'])){
        $Username = $_POST['username'];
        $Password = $_POST['pass'];
        if((!empty($Username)) && (!empty($Password))){
            require_once("functions.php");
            $connection = connectToMYSQLAcc();
            $query = "SELECT count(*) FROM account_table WHERE username = '$Username' AND pass = $Password";
            $result = mysqli_query($connection,$query) or die("Error in query: ".mysqli_error($connection));
            $row = mysqli_fetch_row($result);
            $count = $row[0];

            if($count > 0){
                if($Username == "Admin" && $Password == "123"){
                    $_SESSION['admin'] = $Username;
                    echo"<script>window.location.href='index.php'</script>";
                }else{
                    $_SESSION['user'] = $Username;
                    echo"<script>window.location.href='index.php'</script>";
                }
            }else{
                echo "Bad Login!";
            }
        }  
    }
?>
<script>
    function forgot(){
        window.location.href="index.php";
    }
</script>
