<?php

class TeacherNotify implements Observer{

    public function update(string $taskName){

        return "A new task was created. The teacher/observer have it".PHP_EOL;
    }
}