<?php

if (isset($_POST['register'])) {

    try {

        $query = 'insert into person(per_fname, per_lname, per_birthdate) VALUES (:fname, :lname, :birthdate);';

        $stmt = $con->prepare($query);

        $param = [
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'birthdate' => $_POST['birthdate']
        ];

        $check = $stmt->execute($param);

        if ($check) {
            echo $_POST['fname'] . ' ' . $_POST['lname'] . ' ihr Daten wurden erfasst!';
        } else {
            echo 'Es ist ein Problem aufgetreten!';
        }

    } catch (exception $e) {
        echo $e->getMessage();
    }

} else {

    include './view/service_view.php';

}

