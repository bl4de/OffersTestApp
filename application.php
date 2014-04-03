<?php

class Application {
    
    private $instance;
    private $appName;

    public function __construct($appInstance) {
        $this->appName = APP_NAME;
        $this->instance = $appInstance;
    }
    
    public function getInstance() {
        return $this->instance;
    }
}// Application