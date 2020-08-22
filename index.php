

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myYoutube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        li{list-style-type: none;}

        #row2 li {
            display: inline;
            list-style: none; /* pour enlever les puces sur IE7 */
            margin: 10px;
        }

        .myback{
            background-color: #020235;
        }


        .color{
            color: white
        }

        a{
            color:white
        }

        .mybtn{
            background-color: yellowgreen
        }

    </style>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body class="myback color a">

<div class="container" style="margin-bottom: 80px">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">myYoutube</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if(isset($_SESSION['nickname'])):?>
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php" onclick="return(confirm('vous nous quittez?'));"><?= $_SESSION['nickname'] ?> <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="videos_add.php">ajouter <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">monCompte <span
                                class="sr-only">(current)</span></a>
                    </li>
                <?php else :?>
                    <li class="nav-item active">
                        <a class="nav-link" href="connexion.php">connexion <span class="sr-only">(current)</span></a>
                    </li>
                <?php endif;?>

            </ul>
            <form class="form-inline my-2 my-lg-0" action="" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="entrée" aria-label="Search" name="search">
                <button class="btn color my-2 my-sm-0" style="border: 1px solid" type="submit">rechercher</button>
            </form>
        </div>
    </nav>
</div>



