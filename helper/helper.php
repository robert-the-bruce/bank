<?php


function getStatement($con, $query, $param=NULL) {

    $stmt = $con->prepare($query);

    $stmt->execute($param);

    return $stmt;
}

function deleteSomething($con, $table, $column) {

    try {

        //Abfrage
        $query = "DELETE FROM " .$table. " WHERE ". $column. " = ? LIMIT 1";

        //paramter als Array übergeben
        $param = [$_POST['per_id']];

        //sql injection abfangen
        $stmt = $con->prepare($query);

        //Statement ausführen
        $check = $stmt->execute($param);

        //Kontrolle und Ausgabe einer Meldung
        if ($check) {
            ?><strong>Kontakt wurde gelöscht</strong><?php
        } else {      //if it failed
            ?><strong>Etwas ist schiefgelaufen!!!</strong><?php
        }

    } catch (exception $e) {
        echo $e->getMessage();
    }
}