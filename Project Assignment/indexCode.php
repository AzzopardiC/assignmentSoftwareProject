<div class="container col-lg-12">
  <div class="row"> 
    <button type="button" onclick="stacked()" class="offset-lg-10 offset-md-2 col-lg-1 col-md-4 btn btn-info btn-sm">Stacked View</button>
    <button type="button" onclick="grid()" class="col-lg-1 col-md-4 btn btn-info btn-sm">Grid View</button>
  </div>
</div>
<?php
    require_once("functions.php");
    $connection = connectToMYSQL();
    $query = "SELECT * FROM bass_tbl";
    $result = mysqli_query($connection,$query) or die("Error in query:" .mysqli_error($connection));
    while($row = mysqli_fetch_assoc($result)){
        echo"
            <div class='articles'>
                <div class='first grid' name='first'>
                    <h2>$row[BassName]</h2>
                    <p>Wood: $row[Wood]<br/>Pickups: $row[Pickups]<br/>Frets: $row[Frets]<br/>$ $row[Price]</p>
                    <img src='$row[img]'><br/>
                    <button class='btn-md btn-info btn'>Order</button>
                </div>";
        if($row = mysqli_fetch_assoc($result)){
            echo"    
                    <div class='second grid' name='second'>
                        <h2>$row[BassName]</h2>
                        <p>Wood: $row[Wood]<br/>Pickups: $row[Pickups]<br/>Frets:  $row[Frets]<br/>$ $row[Price]</p>
                        <img src='$row[img]'><br/>
                        <button class='btn-md btn-info btn'>Order</button>
                    </div>
                </div>
            ";
        };
    };
?>
<script>
    function stacked(){
        var x = document.getElementsByName("first");
        var y = document.getElementsByName("second");
        for(i=0;i<x.length;i++){
            x[i].classList.remove("grid");
            y[i].classList.remove("grid");
            x[i].classList.add("stacked");
            y[i].classList.add("stacked");
        }
    }

    function grid(){
        var x = document.getElementsByName("first");
        var y = document.getElementsByName("second");
        for(i=0;i<x.length;i++){
            x[i].classList.remove("stacked");
            y[i].classList.remove("stacked");
            x[i].classList.add("grid");
            y[i].classList.add("grid");
        }
    }
</script>