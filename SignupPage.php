<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
   
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
        display:flex;
        min-height:100vh;
        justify-content: center;
        background: #fff url;
        align-items: center;

      }
      .container{
        width:420px;
        color:#333;
        border-radius: 10px;
         padding: 30px 40px;

      }

      .title{
        font-size: 36px;
        text-align: center;
       
      }

      .user-details{
       display:flex;
       flex-wrap:wrap;
       justify-content: space-between;



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
         .details,select{
          display: block;
          font-weight: 500;
          margin-bottom: 5px;
         }

              
        
         .input-box input::placeholder{
            color:#333;
         }

         #signup{
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
            margin-top: 40px;

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
         
      #gender {
        width: 100%;
        height: 50px;
        margin: 30px 0;
        border: none;
        border-radius: 40px;
        outline: none;
        padding: 10px;
        font-size: 16px;
        background: #fff;
        box-shadow: 0 0 5px #333;
        transition: all 0.3s ease;
        cursor: pointer;
        margin-top: 20px;
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
     
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <form action="../action/register_action.php" method="post" id="signUpForm" name="signUpForm">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" name="username" placeholder="Enter a username" required pattern="[A-Za-z\s_]+"/>



          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name= "email" placeholder="example@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth (YYYY/MM/DD)</span>
            <input type="text" id="dob" name= "dob" placeholder="Date of Birth"required pattern="\d{4}/\d{2}/\d{2}"/>
          </div>
          <div class="input-box">
            <span class="details">Phone Number (XXX-XXX-XXXX)</span>
            <input type="text" id="phonenumber" name= "phonenumber" placeholder="Enter your phoneNumber" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
          </div>
        
          <div class="input-box">
    <span class="details">Password</span>
    <div class="password-container">
        <input type="password" id="password" name="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&.]{8,}$"
placeholder="example= K@y2468Abc">
        <i class="far fa-eye" id="togglePassword"></i>
    

    </div>
</div>

<div class="input-box">
    <span class="details">Confirm Password</span>
    <div class="password-container">
        <input type="password" id="confirm-password" name="confirm-password"  required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
 placeholder="Retype your password">
        <i class="far fa-eye" id="toggleConfirmPassword"></i>
    </div>
</div>
        
        <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="0">None</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                    </select>
      
        <button type="submit" id="signup" name="signup"> SignUp</button>

      </form>
      <div class="register-link">
        <p> Already have an account 
        <a href="Loginpage.php"> Login here</a> </p>

    </div>

    </div>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const confirmPassword = document.querySelector('#confirm-password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });

    // For Confirm Password
    const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');

    toggleConfirmPassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        // toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });

    
</script>



   
   
  </body>
</html> 