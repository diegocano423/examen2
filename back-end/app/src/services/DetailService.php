<?php

namespace App\Services;

class DetailService {
    private $storage;
    private $isDBReady = TRUE;

    public function __construct() {
        if ($this->isDBReady) {
            $this->storage = new StorageService();
        }
    }

    public function getOne ($id) {
        $result = [];
        $query = "SELECT * FROM videogames WHERE id = :id LIMIT 1";
        
        $params = [
            ':id' => $id,
        ];
        
        $result = $this->storage->query($query, $params);
        
        if (count($result['data']) > 0) {
            return $result['data'];
        } else {
            $result["message"] = "0 Results with that id.";
            $result["error"] = true;
        }
        
        return $result;
    }
}