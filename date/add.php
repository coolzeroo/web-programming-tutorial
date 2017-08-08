<html>
<head>
    <meta http-equiv="refresh" content="5;url=../contacte.html" />
</head>
<body>

<?php

/**
 * create new number (auto increment)
 * 1. read from last.contact.id
 * 2. +1 (increment)
 * 3. use of the last incremented number
 * 4. save it in last.contact.id
 * @return int
 */
function getNextId(){
    $idString = file_get_contents("last.contact.id");
    $id = intval($idString);
    $id++;
    file_put_contents("last.contact.id", $id);
    return $id;
}

$contentString = file_get_contents("contacte.json");
$contacte = json_decode($contentString, true);

$id = getNextid();

$newPerson = array(
"id" => $id, // to do create new number (auto increment)
"firstName" => $_GET["firstName"],
"lastName" => $_GET["lastName"],
"phone" =>  $_GET["phone"]
);

$contacte[] = $newPerson; //add new person into array

$contentString = json_encode($contacte, true);
file_put_contents("contacte.json", $contentString);    // salvare fisier

header('Location: ../contacte.html');
?>

contact added...
</body>
</html>






