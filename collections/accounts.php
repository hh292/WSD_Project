<?php
class accounts extends \database\collection
{
    protected static $modelName = 'account';
    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static  function findUserbyUsername($login) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' .$tableName . ' WHERE email ="' . $login.'"';
        //print_r($sql);
        //grab the only record for find one and return as an object
        $recordsSet = self::getResults($sql);
        if (is_null($recordsSet)) {
            echo "False";
            return FALSE;
        } else {

            echo "True";
            return $recordsSet[0];
        }
        //return $recordsSet[0];
    }
}
?>