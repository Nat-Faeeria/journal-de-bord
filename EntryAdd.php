<?php


use EntryDAO;

spl_autoload_register(function($class) {
    include __DIR__ . "/" . $class . '.php';
});

if (isset($_POST['titre'])) {
    $entrydao = new EntryDAO();
    $entries = $entrydao->addEntry($_POST);
}

header('Location: index.php');
?>
