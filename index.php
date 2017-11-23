<?php


define('DATABASE', 'hh292');
define('USERNAME', 'hh292');
define('PASSWORD', 'ic2BQ414k');
define('CONNECTION', 'sql1.njit.edu');
class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}
spl_autoload_register(array('Manage', 'autoload'));
$obj=new displayHtml;
$obj=new main();
class dbConn{
    //variable to hold connection object.
    protected static $db;
    //private construct - class cannot be instatiated externally.
    private function __construct() {
        try {
            // assign PDO object to db variable
            self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
            self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch (PDOException $e) {
            //Output error - would normally log this to error file rather than output to user.
            echo "Connection Error: " . $e->getMessage();
        }
    }
    // get connection function. Static method - accessible without instantiation
    public static function getConnection() {
        //Guarantees single instance, if no connection object exists then create one.
        if (!self::$db) {
            //new connection object.
            new dbConn();
        }
        //
        //return connection.
        return self::$db;
    }
}
// ---------------------abstract class for collection ------------------hh292
abstract class collection {
protected $html;
    static public function create() {
      $model = new static::$modelName;
      return $model;
    }
    static public function findAll() {
        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName;
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode(PDO::FETCH_CLASS, $class);
        $recordsSet =  $statement->fetchAll();
        return $recordsSet;
    }
    static public function findOne($id) {
        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode(PDO::FETCH_CLASS, $class);
        $recordsSet =  $statement->fetchAll();
        //print_r($recordsSet);
        return $recordsSet[0];
    }
}
class accounts extends collection {
    protected static $modelName = 'account';
}
class todos extends collection {
    protected static $modelName = 'todo';
}
//-------------------abstract class for model--------------hh292 
abstract class model {
protected $tableName;
public function save()
    {
        if ($this->id != '') {
            $sql = $this->update();
        } else {
           $sql = $this->insert();
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);
        foreach (array_flip($array) as $key=>$value){
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();
        $id = $db->lastInsertId();
        return $id;
    }
private function insert() 
    {      
        $modelName=get_called_class();
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $columnString = implode(',', array_flip($array));
        $valueString = ':'.implode(',:', array_flip($array));
        //print_r($columnString);
        $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES ('.$valueString.')';
        return $sql;
    }
private function update() 
    {  
    $modelName=get_called_class();
    $tableName = $modelName::getTablename();
    $array = get_object_vars($this);
    $comma = " ";
    $sql = 'UPDATE '.$tableName.' SET ';
    foreach ($array as $key=>$value)
    {
        if( ! empty($value)) {
            $sql .= $comma . $key . ' = "'. $value .'"';
            $comma = ", ";
            }
        }
        $sql .= ' WHERE id='.$this->id;
    return $sql;
    }
    
public function delete() 
    {
    //echo"In delete";
    $db = dbConn::getConnection();
    $modelName=get_called_class();
    $tableName = $modelName::getTablename();
    $sql = 'DELETE FROM '.$tableName.' WHERE id ='.$this->id;
    $statement = $db->prepare($sql);
    //print_r($sql);
    $statement->execute();
    }
}
    
//--------------------------- Account extends Model class -------hh292
class account extends model {
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    public static function getTablename(){
        $tableName='accounts';
        return $tableName;
    }
}
//------------------------------todo extends Model class --------hh292
class todo extends model {
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    public static function getTablename(){
        $tableName='todos';
        return $tableName;
    }
} 
//----------------------------- Main Class ---------------------hh292
class main
{
   public function __construct()
   {

//---------------------**** Todo Table ****-----------------------------------------hh292
//---------------------1) Find All Records from todo Table-------------------hh292
    //$form .= '<br><hr></br>';
    $form .= '<h1> 2) Todos Table</h1>';
    $form .= '<h2> A) All records in Todos Table</h2>';
    $records = todos::findAll();
    $html = displayHtml::tableDisplayFunction($records); 
    $form .='<center>'.$html.'</center><hr>';
//----------------------2) Find Unique Record from todo Table---------------hh292
    $id = 7;
    $records = todos::findOne($id);
    $html = displayHtml::tableDisplayFunction_1($records);
    $form .='<h2>B) Select One Record</h2>';
    $form .='<h3> Record fetched with id: <i>'.$id.'</i></h3>';
    $form .='<center>'.$html.'</center><hr>';
//--------------- --------3) Insert Record in todo Table-----------------hh292
    $form .="<h2> C) Insert One Record</h2>";
    $record = new todo();
    $record->owneremail="hh292@njit.edu";
    $record->ownerid=06;
    $record->createddate="11-05-2017";
    $record->duedate="11-13-2017";
    $record->message="Active record Assignment";
    $record->isdone=1;
    $lstId=$record->save();
    $records = todos::findAll();
    //echo"<h3>After Inserting</h3>";
    $form .="<h3>Record inserted with id - <i>".$lstId."</i></h3>";
    $html = displayHtml::tableDisplayFunction($records);
    $form .='<h3>After inserting the record - </h3>';
    $form .='<center>'.$html.'</center><hr>';
//------------------------4) Update Record in todo Table--------------------hh292 
    $form .="<h2> D) Update Record</h2>";
    //$id=41;
    $records = todos::findOne($lstId);
    $record = new todo();
    $record->id=$records->id;
    $record->owneremail="updatetest@njit.edu";
    $record->message="Update Active record ";
    $record->save();
    $records = todos::findAll();
    $form .="<h3>Updateing record having id: <i>".$lstId."</i></h3>";
    $html = displayHtml::tableDisplayFunction($records);
    $form .='<center>'.$html.'</center><hr>';
// -----------------------5) Delete Record in todo Table------------------hh292
    $form .= "<h2> E) Delete One Record</h2>";
    //print_r($lstId);
    $records = todos::findOne($lstId);
    $record= new todo();
    $record->id=$records->id;
    //print_r($records);
    $records->delete();
    $form .='<h3>Record with id: <i>'.$records->id.'</i> is deleted</h3>';
    //echo "After Delete";
    $records = todos::findAll();
    $html = displayHtml::tableDisplayFunction($records);
    $form .="<h3>After Deleteing</h3>";
    $form .='<center>'.$html.'</center><hr>';
    $form .='</form>';
    print_r($form);
    }
}