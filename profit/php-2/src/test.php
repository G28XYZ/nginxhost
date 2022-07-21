<?php

interface Logger {
    public function log($message);
}

class Application {
    protected logger $logger;

    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }

    public function halt() {
        $this->logger->log('Hated');
    }
}