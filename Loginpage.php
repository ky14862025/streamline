<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>

@import url('https://fonts.googleapis.com/css?family=Poppins: 200,300,400,500,600,700,800,900&display=swap');
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .wrapper{
            width:420px;
            color:#333;
            border-radius: 10px;
            padding: 30px 40px;
        }
         .wrapper h1{
            font-size: 36px;
            text-align: center;

         }

         .input-box{
            width: 100%;
            height: 50px;
            margin:30px 0;

         }
         .input-box input{
            width: 100%;
            height: 50px;
            border:none;
            outline: none;
            border:2px solid;
            border-radius: 40px;
            font-size: 16px;
            padding: 20px 45px 20px 20px;

            
         }
         .input-box input::placeholder{
            color:#333;
         }
         

         .remember-password{
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin:-15px 0 15px;
            margin-top: 50px;
         }

         .remember-password label input{
            accent-color: #fff;
            margin-right: 3px;
         }

         .remember-password a{
            color: #333;
            text-decoration: none;
         }

         .remember-password a:hover{
            text-decoration: underline;
         }
         #login{
            width: 100%;
            height:45px;
            background: #333;
            border: none;
            outline: none;
            border-radius: 40px;
            color: #fff;
            cursor: pointer;
            box-shadow: 0 0 5px #333;
            transition: all 0.3s ease;

         }

         .register-link{
            font-size: 14.5px;
            text-align: center;
            margin-top: 20px;

         }


         .register-link a{
            color: #333;
         }

         .register-link a:hover{
            text-decoration: underline;
         }
         header {
    position:absolute;
    top:0;
    left:0;
    width: 100%;
    padding : 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;

}
header.logo{
    position:relative;
    max-width :80px;
}


header a{
    display: inline-block;
    margin-top: 20px;
    padding: 8px 20px;
    
    color: #fff;
    
    font-weight: 500;
    letter-spacing:1px ;
    text-decoration: none;
}
.password-container {
    position: relative;
}

.fa-eye {
    font-size: 20px;
    color: #555;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}





    </style>
</head>
<body>
<header>
      <a href=..\index.php> <img src=..\images\streamlinelogo.png class="logo" /></a>

    </header>
    <div class="wrapper">
    <form action="../action/login_action.php" method="post" id="loginForm" name="loginForm">
            <h1> Login </h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" id = "username"required>
            

            </div>

            <div class="input-box">
    <span class="details">Password</span>
    <div class="password-container">
        <input type="password" id="password" name="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
 placeholder="password">
        <i class="far fa-eye" id="togglePassword"></i>
    </div>
</div>
            

            <button type="submit" name="login" id="login">Login</button>

            <div class="register-link">
                <p> Don't have an account?
                <a href="SignupPage.php"> Register here</a> </p>

            </div>
        
        


        </form>
    </div>

    <script>
      const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const confirmPassword = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });
    </script>
    
</body>
</html>