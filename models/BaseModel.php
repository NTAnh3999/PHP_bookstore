<?php
    require_once './config/DataBase.php';
    class BaseModel extends DataBase{
        public $connect;

        public function __CONSTRUCT(){
            $this->connect = $this->connection();
        }
        public function getAll($table){
            $query = "SELECT * FROM $table";
            $result = mysqli_query($this->connect, $query);
            $data = [];
            if($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    array_push($data, $row);
                }
                return $data;
            }
        }
        public function getByID($table,$fieldID, $id) {
            $query = "SELECT * FROM $table WHERE $fieldID = $id";
            $result = mysqli_query($this->connect, $query);
            if($result){
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
        }
        public function insert($table,$data){

            $key = implode(',', array_keys($data));
            $value = implode("', '", array_values($data));

            $query = "INSERT INTO ${table}(${key}) VALUES ('${value}')";
            $result = mysqli_query($this->connect,$query);
        }
        public function delete($table,$field, $id) {
            $query = "DELETE FROM $table WHERE $field = $id";
            $result = mysqli_query($this->connect, $query);
        }
        public function update($table, $fieldID, $id, $data){
            $dataSet = [];
            foreach($data AS $key => $value){
                array_push($dataSet, "$key = '$value'");
            }
            $dataString = implode(', ', $dataSet);
            $query = "UPDATE $table SET $dataString WHERE $fieldID = $id";
            $result = mysqli_query($this->connect, $query);
        }

    }
?>