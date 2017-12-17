<?php
namespace utility;
//namespace MyProject\mvcName;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
        if(!empty($array)) {
            $tableGen = '<table class="table-hover table table-bordered table-striped align-items-center">';
            $tableGen .= '<tr>';
            //this grabs the first element of the array so we can extract the field headings for the table
            $fieldHeadings = $array[0];
            $fieldHeadings = get_object_vars($fieldHeadings);
            $fieldHeadings = array_keys($fieldHeadings);
            //this gets the page being viewed so that the table routes requests to the correct controller
            $referingPage = $_REQUEST['page'];
            foreach ($fieldHeadings as $heading) {
                $tableGen .= '<th>' . $heading . '</th>';
            }
            $tableGen .= '</tr>';
            foreach ($array as $record) {
                $tableGen .= '<tr>';
                foreach ($record as $key => $value) {
                    if ($key == 'id') {
                        $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                    } else {
                        $tableGen .= '<td>' . $value . '</td>';
                    }
                }
                $tableGen .= '</tr>';
            }
            $tableGen .= '</table>';
            return $tableGen;
        }
    }
    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table class="table-hover table table-bordered table-striped align-items-center"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    public static function generateTableForOneTodo($tableData)
    {
        $tableGen = '<table class="table-hover table table-bordered table-striped"><tr>';
        $tableGen .= '<tr><td>Id</td><td>'.$tableData->id.'</td></tr>';
        $tableGen .= '<tr><td>Owner Email</td><td>'.$tableData->owneremail.'</td></tr>';
        $tableGen .= '<tr><td>Owner Id</td><td>'.$tableData->ownerid.'</td></tr>';
        $tableGen .= '<tr><td>Created Date</td><td>'.$tableData->createddate.'</td></tr>';
        $tableGen .= '<tr><td>Due Date</td><td>'.$tableData->duedate.'</td></tr>';
        $tableGen .= '<tr><td>Message</td><td>'.$tableData->message.'</td></tr>';
        $tableGen .= '<tr><td>Is Done</td><td>'.$tableData->isdone.'</td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    public static function generateTableForOneAccount($tableData)
    {
        $tableGen = '<table class="table-hover table table-bordered table-striped"><tr>';
        $tableGen .= '<tr><td>Id</td><td>'.$tableData->id.'</td></tr>';
        $tableGen .= '<tr><td>Email</td><td><input type="text" name="email" value="'.$tableData->email.'" required></td></tr>';
        $tableGen .= '<tr><td>First Name</td><td><input type="text" name="fname" value="'.$tableData->fname.'" required></td></tr>';
        $tableGen .= '<tr><td>Last Name</td><td><input type="text" name="lname" value="'.$tableData->lname.'" ></td></tr>';
        $tableGen .= '<tr><td>Phone</td><td><input type="text" name="phone" value="'.$tableData->phone.'"></td></tr>';
        $tableGen .= '<tr><td>Birthday</td><td><input type="text" name="birthday" value="'.$tableData->birthday.'"></td></tr>';
        $tableGen .= '<tr><td>Gender</td><td><input type="text" name="gender" value="'.$tableData->gender.'"></td>';
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>