
<!DOCTYPE html>
<head>
    <title>PHP</title>
</head>
<body>

    <!-- Menu de navigation -->

    <?php include 'menunavigation.php'?>

    <form method="post">
        <input type="text" name="pseudo" id="pseudo" placeholder="Votre Identifiant "> <br>
        <input type="number" name="age" id="age" placeholder="Votre age "> <br>
        <input type="email" name="email" id="email" placeholder="Votre Email "> <br>
        <input type="submit" name="formsend" id="formsend"><br>
    </form>

    <?php 

        if(isset($_POST['formsend'])){ 

            if(!empty($_POST['pseudo']) && !empty($_POST['age']) && !empty($_POST['email'])){  

                echo "Votre pseudo est ". $_POST['pseudo']. "<br/>";
                echo "Vous avez ". $_POST['age']. " ans <br/>";
                echo "Votre email est ". $_POST['email'];
            }        
        }

    ?>
</body>
</html>