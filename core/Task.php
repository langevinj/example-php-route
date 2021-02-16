<?php 


class Task {
    public $description;
    
    public function __constructor($description) 
    {

        $this->description = $description;
        $this->completed = false;

    }

    public function isCompleted() {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }
}