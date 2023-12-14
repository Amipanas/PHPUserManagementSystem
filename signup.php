<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ثبت‌نام کاربران | همتا پنل</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vazirmatn">
        <link href="./css/personalize.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function checkpass()
                {
                if(document.signup.password.value!=document.signup.confirmpassword.value)
                {
                alert(' Password and Confirm Password field does not match');
                document.signup.confirmpassword.focus();
                return false;
                }
                return true;
                } 
        </script>

    </head>
    <body class="light-orange">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h2 align="center">سیستم مدیریت کاربران همتا پنل</h2>
                                        <hr />
                                        <h3 class="text-center font-weight-light my-4">ساخت حساب کاربری</h3></div>
                                    <div class="card-body">
                                        <form method="post" name="signup" onsubmit="return checkpass();">

                                            <div class="row mb-3">
                                            <div class="col-md-6">
                                            <div class="mb-3 mb-md-0">
                                            <input class="form-control" id="fname" name="fname" type="text" placeholder="نام" required />
                                            <!-- <label for="inputFirstName">نام</label> -->
                                            </div>
                                            </div>
                                                                                            
                                            <div class="col-md-6">
                                            <div>
                                            <input class="form-control" id="lname" name="lname" type="text" placeholder="نام‌خانوادگی" required />
                                            </div>
                                            </div>
                                            </div>


                                            <div class="mb-3">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="آدرس ایمیل" required />
                                            </div>
                                            

                                            <div class="mb-3">
                                            <input class="form-control" id="contact" name="contact" type="text" placeholder="شماره تماس" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
                                            </div>
                                                    


                                            <div class="row mb-3">
                                            <div class="col-md-6">
                                            <div class="mb-3 mb-md-0">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="گذرواژه" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
                                            </div>
                                            </div>
                                                                                            

                                            <div class="col-md-6">
                                            <div class="mb-3 mb-md-0">
                                            <input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="گذرواژه" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
                                            </div>
                                            </div>
                                            </div>
                                                                                        

                                            <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn light-orange btn-block text-white" name="submit">ساخت حساب کاربری</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">حساب کاربری دارید؟ورود!</a></div>
                                        <div class="small"><a href="index.php">بازگشت به صفحه اصلی</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         <?php include_once('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>