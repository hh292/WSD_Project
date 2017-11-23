<?php
class homepage extends page {
    //form to upload a file
    public function get()
    {
        $form = '<form method="post" enctype="multipart/form-data"><center>';
        $form .= '<h1>Tables</h1>';
        $records = accounts::findAll();
        $_SESSION['allRecords'] = $records;
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= 'Add one record: <input class="button" type="submit" value="Add Record" name="addRow1">';
        $form .= $tableGen;
       /* $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= 'Add one record: <input class="button" type="submit" value="Add Record" name="addRow2">';
        $form .= $tableGen;*/
        $form .= '</center></form> ';
        $this->html .= $form;
    }
    public function post(){
        if (isset($_POST['addRow1'])) {
            echo 'add to accounts';
            $save='save';
            $tableName='accounts';
            header('Location: index.php?page=addRecords&action='.$save.'&tableName='.$tableName);
        }
        elseif (isset($_POST['addRow2'])) {
            echo 'add 2';
        }/*elseif (isset($_POST['edit'])){
            echo 'edit';
        }*/
        /*('.updateRecord').click(function() {
            echo 'abc';
        });*/
    }
}
?>