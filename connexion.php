<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/0df17449bf.js"></script>
    <title>connexion</title>
    <style>
     body{
                background-color: #FFE0B2;
                padding-top: 70px;
            }
            .inscription-form{
                margin-top: 40px;
                background: #E91E63 ;
                margin-left: 300px;
                width: 500px;
            }
            .form-control{
                width: 500px;
            }
        </style>
</head>
<body>
 <?php
session_start();
        if (!isset($_SESSION['nom'])) {
            ?>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-right">
                        <a  type="button" class="btn btn-primary" href="Register-form.php">S'inscrire</a>

                    </div>
                </div>
            </nav>

            <div class="inscription-form">
                <form method="POST" action="Login.php">
                    <div class="form-group">
                        <label for="exampleInputName2">Pseudo</label>
                        <input type="text" name="pseudo" class="form-control" id="exampleInputName2" placeholder="Pseudo" />
                    </div>
                    <div class="form-group">
                        <label for=for="exampleInputEmail2">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control" id="exampleInputEmail2" placeholder="Password"/>
                    </div>
                    <input type="submit" class="btn btn-default"/>
                </form>
            </div>
            <?php
        } else {
            echo 'Bonjour ' . $_SESSION['nom'];
            echo '<form action="Logout.php" method="POST"><button>Se déconnecter</button></form>';
            echo '<a href="espaceperso.php">Espace personnel</a><br/>';
            echo '<a href="Post-form.php">Poster une annonce</a>';
        }
        



 ?>   
</body>
</html>