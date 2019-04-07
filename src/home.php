<?php

if (isset($_POST['delete'])) {

    deleteSomething($con, 'person', 'per_id');

} else {

    try {

        //Tabelle
        $table = 'person';

        //Abfrage
        $query = 'select * from ' .$table;

        $stmt = $con->prepare($query);

        $stmt->execute();

        //Lade Ansicht
        include './view/home_view.php';


    } catch (exception $e) {
        echo $e->getMessage();
    }

}





