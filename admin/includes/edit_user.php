<?php

if(isset($_GET['edit_user'])){
    $the_user_id = $_GET['edit_user'];
    
    $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_users_query = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($select_users_query)){
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];    
    }
}

if (isset($_POST['edit_user'])) {
    
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];   
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
    
        $query = "UPDATE users SET ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_role = '{$user_role}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_password = '{$user_password}' ";
        $query .= "WHERE user_id = {$the_user_id} ";

        $edit_user_query = mysqli_query($connection, $query);

        confirmQuery($edit_user_query);
}
?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="author">Firstname</label>
        <input class="form-control" value="<?php echo $user_firstname ?>" type="text" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="status">Lastname</label>
        <input class="form-control" value="<?php echo $user_lastname ?>" type="text" name="user_lastname">
    </div>


    <select name="user_role" id="">

        <option value="<?php echo $user_role ?>"><?php echo $user_role ?></option>

        <?php
        if ($user_role == 'admin') {
            echo "<option value='subscriber'>subscriber</option>";
        } else {
            echo "<option value='admin'>admin</option>";
        }
        ?>

    </select>

    <div class="form-group">
        <label for="status">Username</label>
        <input class="form-control" value="<?php echo $username ?>" type="text" name="username">
    </div>

    <div class="form-group">
        <label for="status">Email</label>
        <input class="form-control" value="<?php echo $user_email ?>" type="email" name="user_email">
    </div>

    <div class="form-group">
        <label for="status">Password</label>
        <input class="form-control" value="<?php echo $user_password ?>" type="password" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
    </div>


</form>