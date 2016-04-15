<?php

namespace App\Controllers;
use App\Services\CreateService;
use Slim\Http\Request;

class DetailController {
    public function getOneGame ($request) {
        $result = [];
        $id = $request['id'];
        if (isset($id)) {
            $result = $this->DetailService->getOneGame($id);
        } else { 
            $result = [
                'error' => true,
                'message' => 'We are having trouble getting the especified game.'
            ];
        }
        
        return $result;
    }
} 