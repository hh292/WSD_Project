<?php

//.........................Himanshu Hunge hh292

//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    public static function editTask()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }
    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);
    }
    public static function allOneUser()
    {
        $records = todos::findTasksbyID($_REQUEST['id']);
        self::getTemplate('all_tasks', $records);
    }
    public static function create()
    {
        self::getTemplate('new_task');
    }
    public static function addTask()
    {
        session_start();
        $record = new todo();
        $record->owneremail = $_SESSION["userEmail"];
        $record->ownerid = $_SESSION["userID"];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
    }
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        session_start();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
    }
    public static function update()
    {
        $records = todos::findOne($_REQUEST['id']);
        $record = new todo();
        $record->id=$records->id;
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$_POST['ownerid'];
        $record->createddate=$_POST['createddate'];
        $record->duedate=$_POST['duedate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $record->save();
        session_start();
        header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);
    }
}
?>