<?php
if (isset($_POST['create_user'])) {
    
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
    
        // $post_image = $_FILES['image']['name'];
        // $post_image_temp = $_FILES['image']['tmp_name'];    
    
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
    
        // $post_date = date('d-m-y');
    
        // move_uploaded_file($post_image_temp, "../images/$post_image");
    
        $query = "INSERT INTO users(user_firstname, user_lastname, username, user_email, user_password, user_role) ";
    
        $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$username}','{$user_email}','{$user_password}','subscriber') ";
    
        $create_user_query = mysqli_query($connection, $query);
    
        confirmQuery($create_user_query);

        echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
}
?>


<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="author">Firstname</label>
        <input class="form-control" type="text" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="status">Lastname</label>
        <input class="form-control" type="text" name="user_lastname">
    </div>


    <select name="user_role" id="">
        <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>

    </select>

    <div class="form-group">
        <label for="status">Username</label>
        <input class="form-control" type="text" name="username">
    </div>

    <div class="form-group">
        <label for="status">Email</label>
        <input class="form-control" type="email" name="user_email">
    </div>

    <div class="form-group">
        <label for="status">Password</label>
        <input class="form-control" type="password" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>


</form>