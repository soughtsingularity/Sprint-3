<?php

declare(strict_types=1);

include_once "./Observer.php";
include_once "./TaskManager.php";
include_once "./TeacherNotify.php";

$teacherNotify = new TeacherNotify;
$taskManager = new TaskManager;

$taskManager->attach($teacherNotify);

echo $taskManager->createTask("Task 1");
echo $taskManager->createTask("Task 2");
echo $taskManager->createTask("Task 3");


