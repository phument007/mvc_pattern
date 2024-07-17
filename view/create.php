<?php include "components/header.php" ?>
    <div class=" container">
      <form method="POST" class=" shadow p-4">
        <div class="form-header  d-flex justify-content-between align-items-center">
          <span class=" h4 text-info">ADD PRODUCT</span>
          <a href="list.php" class=" btn btn-danger btn-sm rounded-0">Back</a>
        </div>
        <?php 
          if(isset($_SESSION['error'])){
            echo "<div class='w-100 bg-danger'>". $_SESSION['message'] ."</div>";
            session_destroy();
          }
        ?>
        <div class="form-group mt-3">
           <label for="">Username</label>
           <input type="text" name="username" class=" form-control username">
        </div>
        <div class="form-group mt-3">
           <label for="">User Role</label>
           <select name="role" class=" form-select">
            <option value="1">admin</option>
            <option value="0">user</option>
           </select>
        </div>
        <div class="form-group mt-3">
           <label for="">Password</label>
           <input type="pass" name="pass" class=" form-control username">
        </div>
        <div class="form-button mt-4">
           <button name="save" type="submit" class=" btn btn-success btn-sm rounded-0">Save</button>
           <button type="reset"  class=" btn btn-danger btn-sm rounded-0">Reset</button>
        </div>
      </form>
    </div>
    
    <?php 
      $user = new UserController();
      if(isset($_POST['save'])){
        $name = $_POST['username'];
        $role = $_POST['role'];
        $pass = md5($_POST['pass']);
        $user->store($name,$role,$pass);
      } 
    ?>

<?php include "components/footer.php" ?>