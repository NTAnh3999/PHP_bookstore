<?php 
    class DataBase {
        public $con;
        public $servername = 'localhost';
        public $username = 'root';
        public $password = '';
        public $dbname = 'bookstoretlu';
        public $port = '3306';
        
        public function connection() {
            $this->con = mysqli_connect($this->servername, $this->username,
                                $this->password,$this->dbname, $this->port);
            if(!$this->con) {
                die("Không thể kết nối CSDL 
                " . $this->dbname . ". Lỗi: " . mysqli_connect_error());
            }
            // else{
            //     echo "Kết nối thành công";
            // }
            mysqli_query($this->con,"USE bookstoretlu");
            return $this->con;
        }
    }
?>