<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class DeviceController extends Controller {

    function getInfo() {
        return "name: Saba || lastname: Artkmeladze || age: 18 || hobby: Watching Formula 1";
    }

    function getF1Teams() {
        return "Alfa Romeo Racing, AlphaTauri, Alpine, Aston Martin,
        Ferrari, Haas, McLaren, Mercedes-AMG, Red Bull Racing,
        Williams";
    }

    function getConstructorChamphion() {
        return "Red Bull Racing, that currently have 619 points";
    }

    function getChampion() {
        return "2022 F1 World drivers championship won by Max Verstappen";
    }

    function getBestPrincipal() {
        return "Obviously the best team principal is Toto Wolff";
    }

    function add() {
        $myArray = ["msg" => "Successfully Added"];

        return json_encode($myArray);
    }

    function update() {
        $myArray = ["msg" => "Successfully Updated"];

        return json_encode($myArray);
    }

    function delete() {
        $myArray = ["msg" => "Successfully Deleted"];

        return json_encode($myArray);
    }
}
