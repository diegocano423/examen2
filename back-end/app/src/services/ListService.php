<?php

namespace App\Services;

public function get () {
    $resultData = [];
    $query = "SELECT * FROM videogames";
    $params = [];
        
    $resultData = $this->storage->query($query, $params);
        
    if (count($resultData['data']) > 0) {
        return $resultData['data'];
    } else {
        $resultData["message"] = "We don't have games at this moment.";
        $resultData["error"] = true;
    }
        
    return $resultData;
}