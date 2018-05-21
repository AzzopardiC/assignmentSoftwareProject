<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <title>Bass Haven</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <link rel="icon" type="image/png" href="http://www.freepngimg.com/download/clef_note/5-2-clef-note-free-download-png.png">
        <style>
            body{
                background-image:url(http://static.hdw.eweb4.com/media/wallpapers_dl/1/148/1475199-dark-wood-background.jpg);
                background-size:cover,cover;
            }
        </style>
    </head>
    <body> 
        <div class="pos-f-t">
            <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #243a51">
            <a class="navbar-brand" href="#">Bass Haven</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addBass.php">Add Bass</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link"><?php echo"Logged in as: $_SESSION[user]";?></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>   
                    </li>
                </ul>
                <span class="navbar-text font-weight-bold">
                You can't buy happiness, but you can buy a bass which is basically the same thing.
                </span>
            </nav>
        </div>
        </div>