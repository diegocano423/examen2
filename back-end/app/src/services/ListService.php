<?php

namespace App\Services;

class ListaService {
    public function get () {
        $data = [];
        $query = "SELECT * FROM videogames";
        $params = [];
            
        $result = $this->storage->query($query, $params);
            
        if (count($result['data']) > 0) {
            return $result['data'];
        } else {
            $result["message"] = "We don't have games at this moment.";
            $result["error"] = true;
        }
            
        return $result;
    }
}