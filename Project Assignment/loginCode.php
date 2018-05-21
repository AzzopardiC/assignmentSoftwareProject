<form style="margin-top:50px;" method="post" action="login.php">
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
<script>
    function forgot(){
        window.location.href="index.php";
    }
</script>
