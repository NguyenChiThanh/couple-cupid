<?php  
  include_once "../Models/User/model_user.php";

  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_model = new User();

    $user_model->connectDB(); // Connect database

    $user = $user_model->check_login($email, $password); // Check user to login system if exist

    if ($user > 0) {
        $user = $user['email'];
        echo "<script>alert('Đăng nhập thành công');</script>";
        header("Location: ../Views/User/user_index.php"); /* Redirect another page */
      }
      else {
        echo "<script>alert('Email hoặc mật khẩu không hợp lệ');</script>";
      }

    $user_model->closeDB(); // Close databse
  }

?>