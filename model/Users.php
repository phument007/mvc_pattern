<?php include "../database/Database.php"; ?>
<?php 
   class Users extends Database {
      public $id;
      public $name;
      public $role;
      public $pass;
      public function save(){
         $sql = "INSERT INTO `users`(`user_name`, `user_role`, `user_pass`) 
         VALUES ('{$this->name}','{$this->role}','{$this->pass}')"; 
         mysqli_query($this->conn,$sql);
      }

      public function delete(){
         $sql      = "DELETE FROM `users` WHERE `user_id` = {$this->id}";
         mysqli_query($this->conn,$sql); 
      }

      public function  update()  {
         $sql = "UPDATE `users` SET `user_name` = '{$this->name}',
         `user_role` = '{$this->role}, `user_pass` = {$this->pass}'";
         mysqli_query($this->conn,$sql);
      }

      public function SelectAll(){
         $sql = "SELECT * FROM `users`";
         $result = mysqli_query($this->conn,$sql);
         $data = mysqli_fetch_all($result);

         return $data;
      }


      public function SelectWhere($type,$value){
         
      }

      

     



     








   }
?>