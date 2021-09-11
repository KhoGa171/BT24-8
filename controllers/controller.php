<?php 
    $action = $_GET['action'];

    require_once('../controllers/stuController.php');
    $stuController = new StuController();
            
    if($action == 'stuList'){
        $stuController->showAllStudent();
    }
    if($action == 'showStuAdd'){
        $stuController->showAdd();
    }
    if($action == 'stuAdd'){
        $stuController->addStudent();
    }
    if($action == 'stuEdit'){
        $stuController->editStudent();
    }
    if($action == 'showStuEdit'&&$id = $_GET['id']){
        $stuController->showEdit();
    }
    if($action == 'stuDelete'&&$id = $_GET['id']){
        $stuController->deleteStudent();
    }

    require_once('../controllers/subController.php');
    $subController = new SubController();
    if($action == 'subList'){
        $subController->showAllSubject();
    }
    if($action == 'showSubAdd'){
        $subController->showAdd();
    }
    if($action == 'subAdd'){
        $subController->addSubject();
    }
    if($action == 'subEdit'){
        $subController->editSubject();
    }
    if($action == 'showSubEdit'&&$id = $_GET['id']){
        $subController->showEdit();
    }
    if($action == 'subDelete'&&$id = $_GET['id']){
        $subController->deleteSubject();
    }

    require_once('../controllers/scoController.php');
    $scoController = new ScoController();
    if($action == 'scoList'){
        $scoController->showAllScores();
    }
    if($action == 'showScoAdd'){
        $scoController->showAdd();
    }
    if($action == 'scoAdd'){
        $scoController->addScores();
    }
    if($action == 'scoEdit'&&$id = $_GET['id']){
        $scoController->editScores();
    }
    if($action == 'showScoEdit'&&$id = $_GET['id']){
        $scoController->showEdit();
    }
    if($action == 'scoDelete'&&$id = $_GET['id']){
        $scoController->deleteScores();
    }

    require_once('../controllers/staController.php');
    $staController = new StaController();
    if($action == 'TKSVG'){
        $staController->showTKSVG();
    }
    if($action == 'TKSVTB'){
        $staController->showTKSVTB();
    }
    if($action == 'TKSVTL'){
        $staController->showTKSVTL();
    }
    if($action == 'TKSVY'){
        $staController->showTKSVY();
    }
?>