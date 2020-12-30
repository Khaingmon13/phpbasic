<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo)
    {
            $this->pdo =$pdo;
    }
    public function selectAll($table)
    {
        $statement=$this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO :: FETCH_OBJ);
    }
    public function insert($dataArray, $tableName)
    {
        $getDataKeys = array_keys($dataArray);
        $col = implode(",", $getDataKeys);
        $questionMark = "";
        foreach ($getDataKeys as $getDatakey) {
            $questionMark.= "?,";
        }
        $questionMark = rtrim($questionMark,",");
        $sql = "insert into $tableName ($col) values($questionMark)";
        $statement = $this->pdo->prepare($sql);
        // $statement->execute(array_values($dataArray));
        // dd(array_values($dataArray));
        $statement->execute(array_values($dataArray));
    }
}