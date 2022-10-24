<?php
ob_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
                        *,
                *:before,
                *:after {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                }
                body {
                /* background: url(https://source.unsplash.com/1920x2400?hdr,sunset,ocean); */
                background: navy;
                background-size: cover;
                background-repeat: no-repeat;
                
                }
                form {
                height: 520px;
                width: 400px;
                background-color: rgba(255, 255, 255, 0.03);
                position: absolute;
                transform: translate(-50%, -50%);
                top: 50%;
                left: 50%;
                border-radius: 10px;
                backdrop-filter: blur(15px);
                border: 2px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
                padding: 50px 35px;
                }
                form * {
                font-family: "Poppins", sans-serif;
                color: #ffffff;
                letter-spacing: 0.5px;
                outline: none;
                border: none;
                }
                form h3 {
                font-size: 40px;
                font-weight: 700;
                line-height: 42px;
                text-align: center;
                }

                label {
                display: block;
                margin-top: 30px;
                font-size: 16px;
                font-weight: 500;
                }
                input {
                display: block;
                height: 50px;
                width: 100%;
                background-color: rgba(255, 255, 255, 0.05);
                border-radius: 3px;
                padding: 0 10px;
                margin-top: 8px;
                font-size: 14px;
                font-weight: 300;
                }
                ::placeholder {
                color: #e1e1e1;
                }

                input:hover{
                outline: 2px solid #0001;
                }
                button {
                margin-top: 50px;
                width: 100%;
                background-color: #ffffff;
                color: #080710;
                padding: 15px 0;
                font-size: 18px;
                font-weight: 600;
                border-radius: 5px;
                cursor: pointer;
                }
                .social {
                margin-top: 30px;
                display: flex;
                }
                .social div {
                background: red;
                width: 150px;
                border-radius: 3px;
                padding: 5px 10px 10px 5px;
                background-color: rgba(255, 255, 255, 0.27);
                color: #eaf0fb;
                text-align: center;
                }
                .social div:hover {
                background-color: rgba(255, 255, 255, 0.47);
                
                }
                .social .fb {
                margin-left: 25px;
                }
                .social i {
                margin: 10px 0 4px;
                }

                @media only screen and (max-width: 600px) 
                body {
                    background:url(https://source.unsplash.com/1080x2400?sunset+birdeye+ocean);
                }

    </style>


<form method="POST">
        <h3>Login Here</h3>

        <label for="username">Email</label>
        <input type="text" placeholder="Email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <button type="submit" name="loginbtn">Log In</button>
</form>

</html>
</body>
</html>

<?php

if(isset($_POST["loginbtn"]))
{
    // echo "<script>alert('clicked')</script>";
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $loginquery = "select * from php-practical-practise_tbl where email = '".$email."' and password= '".$password."'";
    $loginquery =  "select * from practise_tbl where email = '".$email."' and password = '".$password."'";
    $loginqueryconnect = mysqli_query($con, $loginquery);
    $count = mysqli_num_rows($loginqueryconnect);
    if($count>0)
    {
        header("Location:DashboardTemplate/pages/dashboard.php");
    // echo "<script>alert('clicked')</script>";
    }
    else{
        echo "<script>alert('not')</script>";
    }
    
}
ob_end_flush();
?>