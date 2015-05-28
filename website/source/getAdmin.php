<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lasse
 * Date: 16/04/15
 * Time: 11:37
 */
require("common.php");

if(!empty($_GET['ID'])) {
    $query = "
            SELECT koordinater
            FROM IDs
            WHERE ID=:id
        ";

    $query_params = array(
        ':id' => $_GET['ID']
    );

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }

    $row = $stmt->fetch();

    print $row['koordinater'];
}
?>
<html>
<head>
    <title>Arduino Projekt</title>
</head>
<body>
<br>
<br>
<a href="private.php">Tilbage</a>
</body>
</html>