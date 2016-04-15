<?php

use App\Services\ListService;

public function get () {
        $result = $this->ListService->get();
        
        return $result;
}