<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Salmanbe\MapQuest\MapQuest;

class MapQuestController extends Controller
{
    public function index(){

        $address = "Pl. de l'Atomium 1, 1020 Bruxelles";

        $map = new MapQuest();

        $map->set($address);
        
        return view('welcome')->with([
            'address' => $address,
            'map' => $map
        ]);
    }
}