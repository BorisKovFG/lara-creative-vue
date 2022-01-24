<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
//        return "Hello, World!!!";
//        return ['data' => "Hello, World!!!"];
        $persons = [
                [
                    "id" => 1,
                    "name" => 'Vasya',
                    "age" => 30,
                    "job" => 'coach'
                ],
                [
                    "id" => 2,
                    "name" => 'Kolya',
                    "age" => 27,
                    "job" => 'driver'
                ],
                [
                    "id" => 3,
                    "name" => 'Monya',
                    "age" => 33,
                    "job" => 'accountant'
                ],
                [
                    "id" => 4,
                    "name" => 'Vika',
                    "age" => 21,
                    "job" => 'rest'
                ],
                [
                    "id" => 5,
                    "name" => 'Nikita',
                    "age" => 22,
                    "job" => 'seller'
                ]
            ];
        return $persons;
    }
}
