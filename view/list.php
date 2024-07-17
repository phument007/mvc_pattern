<?php include "components/header.php" ?>
<?php 
   $users = new UserController();
   
 ?>
<div class=" container">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Proudcts</h3>
        <a href="create.php" class=" btn btn-primary btn-sm">add more</a>
    </div>
    <table class=" table table-borderless table-striped">
        <tr class=" table-dark">
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php foreach($users->Select() as $val){ ?>
        <tr> 
            <td><?php echo $val[0] ?></td>
            <td><?php echo $val[1] ?></td>
            <td><?php echo ($val[2] == 1) ? 'admin' : 'user' ?></td>
            <td>
                <a href="#" class=" btn btn-primary btn-sm ">Edit</a>
                <button class=" btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        <?php }?>
        
    </table>
</div>
<?php include "components/footer.php" ?>
