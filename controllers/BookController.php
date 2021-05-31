<?php
    class BookController extends BaseController{
        protected $model;
        public function __CONSTRUCT() {
            $this->loadModel('BookModel');
            $this->model = new BookModel;
        }
        
        public function index() {
            $books = $this->model->getAllBook();
            return $this->loadView("/book/index.php", [
                'book' => $books,
                'title' => 'Tiêu đề trang index'
            ]);
         }
        
         public function create(){
            $this->loadView('/Book/create.php');
             $data = [];
             $success = '';
             $error = '';
            if(isset($_POST['submit'])) {
                $name = $_POST['productname'];
                $price = $_POST['productprice'];
                $img = $_FILES['myfile']['name'];
                $status = $_POST['status'];
                $data = [
                    'TenSanPham' => $name,
                    'DonGia' => $price,
                    'HinhAnh' => $img,
                    'TrangThai' => $status
                ];
                
                $newBook = $this->model->createNewBook($data);
                header("Location: index.php?controller=book");
                exit();
            }
         }

         public function delete(){
             if(isset($_GET['id'])) {
                 $id = $_GET['id'];
                $deletedBook = $this->model->deleteBook($id);
                header("Location: index.php?controller=book");
                exit();

             }
         }
         public function update(){
             if(isset($_GET['id'])){
                 $id = $_GET['id'];
                 $book = $this->model->getBookByID($id);
                 
                 $this->loadView("Book/update.php",[
                     'book' => $book
                 ]);
                 if(isset($_POST['update'])) {
                    $name = $_POST['productname'];
                    $price = $_POST['productprice'];
                    $img = $_FILES['myfile']['name'];
                    $status = $_POST['status'];
                    $data = [
                        'TenSanPham' => $name,
                        'DonGia' => $price,
                        'HinhAnh' => $img,
                        'TrangThai' => $status
                    ];
                    
                    $updatedBook = $this->model->updateBook($id, $data);
                    header("Location: index.php?controller=book");
                    exit();
                }
             }
         }
    }
           
        
    
?>