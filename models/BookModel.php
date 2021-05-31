<?php
    class BookModel extends BaseModel {   
        CONST TABLE = 'sanpham';
        CONST TABLE_ID = 'Ma_SanPham';   

        public function getAllBook() {
            return $this->getAll(self::TABLE);
        }
        public function getBookByID($id){
            return $this->getByID(self::TABLE,self::TABLE_ID,$id);
        }
        public function createNewBook($data){
            return $this->insert(self::TABLE, $data);
        }
        public function deleteBook($IDvalue) {
            return $this->delete(self::TABLE, self::TABLE_ID, $IDvalue);
        }

        public function updateBook($IDvalue, $data) {
            return $this->update(self::TABLE,self::TABLE_ID,$IDvalue,$data);
        }

    }   
        
    
    