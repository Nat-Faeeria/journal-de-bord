<!DOCTYPE html>
<html>
<head>
	<title>Journal de bord</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Death Page</h1>
    <form action="EntryAdd.php" method="POST">
        <label for="titre">Titre</label><input type="text" id="titre" name="titre" />
        <label for="date">Date</label><input type="date" id="date" name="date" />
        <label for="pensee">Pensée</label><textarea id="pensee" name="pensee"></textarea>
        <button type="submit">Ecrire</button>
    </form>
    <h2>Liste des pensées : </h2>
    <container>
        <?php
            if (!isset($entries)){
                $entries = [];
            }
            foreach($entries as $entry) {
                $entry->display();
                echo '<br/>';
            }
        ?>
    </container>
</body>
</html>
