<?php

namespace App\Controllers;
use App\Services\CreateService;
use Slim\Http\Request;

class CreateController {
	private $CreateService;
  
    public function __construct() {
        $this->CreateService = new CreateService();
    }

    public function create ($request){
    	$result = [];
        $data = $request->getParsedBody();

        if (array_key_exists("id", $data)) {
            $id = $data["id"];
        }
        
        if (array_key_exists("title", $data)) {
            $title = $data["title"];
        }
        
        if (array_key_exists("developer", $data)) {
            $developer = $data["developer"];
        }
      
        if (array_key_exists("description", $data)) {
            $description = $data["description"];
        }

        if (array_key_exists("console", $data)) {
            $console = $data["console"];
        }

        if (array_key_exists("releaseDate", $data)) {
            $release_date = $data["releaseDate"];
        }
        if (array_key_exists("calification", $data)) {
            $calification = $data["calification"];
        }
        if (array_key_exists("urlImage", $data)) {
            $url_image = $data["urlImage"];
        }

        if (isset($id, $title, $developer, $description, $console, $release_date, $calification, $url_image)) {
            $result = $this->CreateService->create($id, $title, $developer, $description, $console, $release_date, $calification, $url_image);
            return $result;
        } else {
            $result['error'] = true;
            $result['message'] = "You must send all the information required to create a new game";
        }
        return $result;
    }
}
