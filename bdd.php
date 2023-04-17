<?php
		// Connexion à la base de données
		$servername = "localhost";
		$username = "root";
        $password = "";
		$dbname = "romero";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connexion échouée : " . $conn->connect_error);
		}

		// Traitement de la vérification
		if (isset($_POST["verifier"])) {
			$email = $_POST["email"];
			$sql = "SELECT * FROM verif WHERE email = '$email'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// Affichage du message d'erreur
				echo "<p style='color: red;'>L'adresse email '$email' est déjà inscrite.</p>";
			} else {
				// Affichage du message de succès
				echo "<p style='color: green;'>L'adresse email '$email' vien d'être inscrite dans notre base.</p>";
                $sql2="INSERT INTO verif (email) VALUES ('$email')";
                $result2= $conn->query($sql2);
			}
		}
		// Fermeture de la connexion à la base de données
		$conn->close();
	?>