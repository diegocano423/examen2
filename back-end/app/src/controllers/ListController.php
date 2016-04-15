<?php

use App\Services\ListService;

class ListController {
	private $ListService;

	public function get () {
	        $result = $this->ListService->get();
	        
	        return $result;
	}
}