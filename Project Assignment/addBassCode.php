<form class="form-horizontal col-lg-10 col-md-12 offset-md-0 offset-lg-2" method="post" action="addBassCode.php" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="bassName">Bass Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="bassName" name="bassName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="wood">Wood:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="wood" name="wood" placeholder="Wood Type">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="pickUps">Pickups:</label>
        <div class="col-sm-10">
            <input type="text" min="0" value="0" class="form-control" id="pickUps" name="pickUps">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="frets">Frets:</label>
        <div class="col-sm-10">
            <input type="number" min="0" value="0" class="form-control" id="frets" name="frets">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="price">Price:</label>
        <div class="col-sm-10">
            <input type="number" min="0" value="0" class="form-control" id="price" name="price">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-12 col-sm-2" for="imgLink">Image Link:</label>
        <div class="col-sm-10">
            <input type="text" step=".01" class="form-control" id="imgLink" name="imgLink">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
        </div>
    </div>    
</form>
<?php
    if (isset($_POST['submit'])) {
        $bass_name = $_POST['bassName'];
        $wood_type = $_POST['wood'];
        $Pickups = $_POST['pickUps'];
        $Frets = $_POST['frets'];
        $Price = $_POST['price'];
        $img = $_POST['imgLink'];
    
        if(!empty($bass_name) && !empty($wood_type) && !empty($Pickups) && !empty($Frets) && !empty($Price) && !empty($img)){
            require_once("functions.php");
            $conn = connectToMYSQL();
            $query = "INSERT INTO bass_tbl(BassName,Wood,Pickups,Frets,Price,img) VALUES ('$bass_name','$wood_type','$Pickups','$Frets','$Price','$img')";
            $result = mysqli_query($conn, $query) or die("Error in query: ". mysqli_error($conn));
        }
    }
?>