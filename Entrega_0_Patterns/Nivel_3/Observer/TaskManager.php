<?php 

class TaskManager{

    private array $observers = [];

    public function attach(Observer $observer){
        
        $this->observers [] = $observer;
    }

    public function notify(string $taskName){

        $notifications = "";

        foreach($this->observers as $observer){

            $notifications .= $observer->update($taskName) . PHP_EOL;
        }

        return $notifications;
    }

    public function createTask(string $taskName){

        $output = "Task '$taskName' created" . PHP_EOL;
        $output .= $this->notify($taskName); 
        return $output;
    }
}