<?php

class Application {
    
    private $instance;

    public function __construct($appInstance) {
        $this->instance = $appInstance;
    }
    
    public function getInstance() {
        return $this->instance;
    }
}// Application