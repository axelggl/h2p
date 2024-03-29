<?php

class Magic
{
    public string $card = 'As';

    public function __construct()
    {
        echo "Attribue une valeur à un objet lors de sa création\n";
    }

    public function __destruct()
    {
        echo "Détruit un objet\n";
    }

    public function __get($name)
    {
        echo "Renvoie la valeur d'une donnée inaccessible\n";
    }

    public function __set($name, $value)
    {
        echo "Modifie la valeur d'une donnée inaccessible\n";
    }

    public function __isset($name)
    {
        echo "Vérifie si une donnée inaccessible est définie\n";
    }

    public function __toString()
    {
        echo "Renvoie une chaîne de caractères représentant l'objet\n";
    }

}