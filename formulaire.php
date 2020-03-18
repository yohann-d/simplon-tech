<?php
$nom = !empty($_POST['nom'])?$_POST['nom']:NULL;
$mail = !empty($_POST['mail'])?$_POST['mail']:NULL;
$message = !empty($_POST['message'])?$_POST['message']:NULL;




	try {
      $conn = new PDO('mysql:host=db5000303632.hosting-data.io;dbname=dbs296619','dbu526540','Gre-94^X');
    }
    catch(PDOException $e)
    {
		echo $sql . "<br>" . $e->getMessage();
    }

	 // echo "C'est bon !!! New record created successfully";

    $stmt = $conn->prepare("INSERT INTO formulaire (nom,mail,message) VALUES (:nom,:mail,:message)");
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':mail',$mail);
    $stmt->bindParam(':message',$message);
    $stmt->execute();



	if (empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['message']))
	{
	  // echo "Tous les champs doivent etre remplis";
		exit() ;
	}

	include("index.php");

	?>
