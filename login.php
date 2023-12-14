<?php session_start(); 
    include_once('includes/config.php');
    // Code for login 
    if(isset($_POST['login']))
    {
        $password=$_POST['password'];
        $dec_password=$password;
        $useremail=$_POST['uemail'];
        $ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
        $num=mysqli_fetch_array($ret);
        if($num>0)
        {
            $_SESSION['id']=$num['id'];
            $_SESSION['name']=$num['fname'];
            header("location:welcome.php");
        }
        else
        {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ورود کاربران | همتا پنل</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vazirmatn">
    <link href="./css/personalize.css" rel="stylesheet" />
</head>

<body class="light-orange">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="card-header">
                                    <h2 class="mt-2" align="center">سیستم مدیریت کاربران همتا پنل</h2>
                                    <hr />
                                    <h3 class="text-center font-weight-light my-2">ورود کاربر</h3>
                                </div>
                                <div class="card-body">

                                    <form method="post">

                                        <div class="mb-3">
                                            <input class="form-control" name="uemail" type="email"
                                                placeholder="ایمیل" required />
                                        </div>


                                        <div class="mb-3">
                                            <input class="form-control" name="password" type="password"
                                                placeholder="گذرواژه" required />
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0 small">
                                            <a class="small" href="password-recovery.php">فراموشی رمز عبور</a>
                                            <button class="btn light-orange text-white" name="login" type="submit">ورود به سامانه</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="signup.php">ثبت‌نام نکرده‌اید؟ ثبت‌نام!</a></div>
                                    <div class="small"><a href="index.php">بازگشت به صفحه‌اصلی</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php include('includes/footer.php');?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>