<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Tech</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="tech.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include ('navbar.php'); ?> 

    <div class="imghead" >
        <img src="img/slider3" alt="image header">
    </div>
    <h2 class="conta">Contactez-nous</h2>
    <div class="container">
        <div slass="row">
            <form action="form" method="post" action="formulaire.php">
                <div class="form">
                    <label for="mail">Nom :</label>
                    <input type="text" id="nom" class="form-controle" type="nom" name="nom" placeholder="Votre nom..." required>
                </div>
                    </br>
                <div class="form">
                    <label for="sujet">Mail :</label></br>
                    <input type="text" id="mail" class="form-controle" type="email" name="mail" placeholder="Votre email..." aria-describedby="emailHelp" required>
                </div>
                    </br>
                <div class="form">
                    <label for="message">Message :</label></br>
                    <textarea id="message" class="form-controle" name="message" placeholder="Votre message..." rows="7"></textarea>
                </div>
                <button class="button" type="submit">Envoyer</button>           
            </form>
        </div>
    </div>











        
    <?php include ('footer.php'); ?> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

