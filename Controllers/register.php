<?php  
  include_once "../Models/User/model_user.php";

  /*
  * User send requested when click button SignUp, system check and insert into database
  */
  if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];

    $user_model = new User();
    $user_model->connectDB(); // Connect database
    $user = array('email' => $email, 'password' => $password, 'lastname' => $lastname, 'firstname' => $firstname, 'gender' => $gender);
    
    if ($user_model->signUp($user)) {
      echo "<script>alert('Đăng ký thành công');</script>";
      header("Location: ../Views/Index/index.php"); /* Redirect another page */
    }
    else {
      echo "<script>alert('Xảy ra lỗi khi đăng ký');</script>";
    }

    $user_model->closeDB(); // Close databse
    exit();
  }

  /*
  * User request email and system check email if exist
  */
  if(isset($_POST['email'])) {
    $email = $_POST['email'];

    $user_model = new User();
    $user_model->connectDB(); // Connect database
    $numRows = $user_model->check_user_by_email($email); // Check email exist

    if($numRows > 0) {
      echo "* Địa chỉ Email này đã tồn tại";
    }
    else {
      // Correct email format
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "OK";
      }
      else { // Incorrect email format
        echo "* Chưa đúng định dạng Email";
      }
      
    }
    $user_model->closeDB(); // Close databse
    exit();
  }

  /*
  * User request password and repassword, system check it is the same
  */
  if(isset($_POST['password']) && isset($_POST['repassword']))
  {
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $lengthPassword = strlen($password);

    // Check length of password less than 8 character
    if ($lengthPassword < 8) {
      echo "* Mật khẩu ít nhất 8 ký tự";
    }
    else {
      if($password != $repassword) {
        echo "* Mật khẩu không khớp";
      } 
      else {
        echo "OK";
      }
    }
    exit();
  }

  /*
  * User request firstname or lastname, system check it is correct format
  */
  if(isset($_POST['firstname']))
  {
    $firstname = $_POST['firstname'];
    // Check format
    if (preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$/",$firstname)) {
      echo "OK";
    }
    else {
      echo "* Chỉ có chữ cái và khoảng trắng";
    }
    exit();
  }

  if(isset($_POST['lastname']))
  {
    $lastname = $_POST['lastname'];
    // Check format
    if (preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$/",$lastname)) {
      echo "OK";
    }
    else {
      echo "* Chỉ có chữ cái và khoảng trắng";
    }
    exit();
  }

?>