<?php include "../model/Users.php"; ?>
<?php include "../handle/view.php";?>
<?php include "../handle/message.php"; ?>
<?php 
   class UserController{

      public function Select(){
         $users = new Users;
         return $users->SelectAll();
      }
      public function store($name,$role,$pass){


         if($name !== "" && $role !== "" && $pass !== "" ){
            $product = new Users();
            $product->name = $name;
            $product->role = $role;
            $product->pass = $pass;
            $product->save();
            message('success','Added Product Success');
            return view("list");
         }else{
            message('error','Please Input all feilds');
            return view('create');
         }



         
      }

      public function destroy($id){
         $product = new Users();
         $product->id = $id;
         $product->delete();
         return view("hello");
      }

      
      

   }

?>