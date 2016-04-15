<?php 

namespace App\Services;

Class CreateService {
	private $storage;
    private $isDBReady = TRUE;

    public function __construct() {
        if ($this->isDBReady) {
            $this->storage = new StorageService();
        }
    }

    public function create ($id, $title, $developer, $description, $console, $releaseDate, $calification, $urlImage) {
    	$result = [];

    	if ($id) {
    		if (strlen(trim($title)) > 0) {
    			if (strlen(trim($developer) > 0) {
    				if (strlen(trim($description) > 0) {
    					if (strlen(trim($console) > 0) {
    						if ($date) {
    							if ($calification) {
    							    if (strlen(trim($url_image) > 0) {
    							    	$create_query = "INSERT INTO videogames (id, titulo, desarrollador, descripcion, consola, fechaLanzamiento, calificacion, urlImagen) VALUES (:id, :title, :developer, :description, :console, :releaseDate, :calification, :urlImage)";
    							    	$create_params = [
    							    	    ":id" => $id,
    							    	    ":title" => $title,
    							    	    ":developer" => $developer,
    							    	    ":description" => $description,
    							    	    ":console" => $console,
    							    	    ":releaseDate" => $releaseDate,
    							    	    ":calification" => $calification,
    							    	    ":url_image" =>  $urlImage
    							    	];
    							    	$result = $this->storage->query($create_query, $create_params);
        
        								if (count($result['data']) > 0) {
            								return $result['data'];
        								} else {
            								$result["message"] = "We have a problem creating new games.";
            								$result["error"] = true;
        								}
        
        								return $result['data'];

    								} else {
    									$result["message"] = "The image is required.";
                        				$result["error"] = true;
    								}
    							} else {
    								$result["message"] = "The calification is required.";
                        			$result["error"] = true;
    							}
    						} else {
    							$result["message"] = "The date is required.";
                        		$result["error"] = true;
    						}
     					} else {
     						$result["message"] = "The console is required.";
                        	$result["error"] = true;
     					}
    				} else {
    					$result["message"] = "The description is required.";
                        $result["error"] = true;
    				}
    			} else {
    				$result["message"] = "The developer is required.";
                    $result["error"] = true;
    			}
    		} else {
                $result["message"] = "The title is required.";
                $result["error"] = true;
    		}
    	} else {
            $result["message"] = "The id is required.";
            $result["error"] = true;
    	}

    return $result['data'];

    }
}