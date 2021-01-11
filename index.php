<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Controller\StudentController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

$studentController = new StudentController();

switch ($page){
    case 'list':
        $studentController->viewList();
        break;
    case 'add-student':
        $studentController->addStudent();
        break;
    case 'delete':
        $studentController->deleteStudent();
        break;
    default:
        $studentController->viewList();
}