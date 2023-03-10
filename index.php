<?php
$today = new DateTime();
$today = $today->format('Y');

$db = 'sqlite:./identifier.sqlite';
try{
    $pdo = new PDO($db);
} catch(Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}
$query = "SELECT id, date, driver FROM trajets";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Covoit interne</title>
</head>
<body>
<header>
    <nav>
        <a href="#home">Logo</a>
        <a href="#new-driver">Ajouter une covoiteuse</a>
        <a href="#details">Les détails</a>
    </nav>
</header>
<main>
    <section id="home">
        <div>
            Liste des covoitureuses :
        </div>
<!--        foreach ($jours as $numero=>$jour) {-->
<!--        echo '<option value="' . $numero . '">' . $jour . '</option>';-->
<!--        }-->
    </section>
    <section id="new-driver">
        <form action="" method="POST">
            <label for="prenom">Prénom du conducteur : </label>
            <input type="text" name="prenom" id="prenom"><br>

            <label for="date">Date concernée  : </label>
            <input type="date" name="date" id="date"><br>

            <input type="submit" name="ok" value="Valider"><br>
        </form>
    </section>
    <section id="details">
        <div>
            J'ai décidé d'inverser la règle de masculinisation des noms dans ce projet, ce qui explique notamment pourquoi on peut créer "une covoitureuse" par défaut.<br>
            <strong>Pourquoi ?</strong> Eh bien pourquoi pas. Ca change un peu, non ?
        </div>
    </section>
</main>
<footer>Lauranne Sarribouette - <?= $today ?></footer>
</body>
</html>
