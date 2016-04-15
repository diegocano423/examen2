<?php

namespace App\Controllers;
use App\Services\ListService;
use Slim\Http\Request;

class ListController {
	private $ListService;

	public function __construct() {
        $this->ListService = new ListService();
    }

	public function get () {
	    $result = $this->ListService->get();
	        
	    return $result;
	}
}