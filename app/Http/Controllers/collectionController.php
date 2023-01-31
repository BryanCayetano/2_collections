<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


sort($users);

foreach ($users as $key => $value) {
    echo "users[" . $key . "]=" . $value . "<br>";
}

$comprobacion->where('users', '===', 'Bryan');

foreach ($users as $user) {
    echo $user->name;
}

$users = User::where('dni', '47932641C')->get();

//se creó un seeder personalizado para practica, aun que no se sabe seguro si creará
//un user que cumpla los requisitos impuestos aqui