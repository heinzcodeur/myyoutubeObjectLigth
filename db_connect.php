<?php


class db_connect
{
    private function bdd_connexion()
    {

        $con = mysqli_connect("localhost", "root", "root", "youtube") or die('connexion nok' . mysqli_error());
    }


}
