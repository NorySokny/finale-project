
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style01.css">
    <title>Registration</title>
</head>
<body>
    <?php
        if(isset($_POST['insert']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $Cpassword = $_POST['Cpassword'];
            $birthday = $_POST['birthday'];
            $gender = $_POST['gender']; 
        
            $con = new mysqli("localhost","root","","e_learning");
            $insert_users = "INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `password`, `Cpassword`, `birthday`, `gender`)
            value(null,'$fname','$lname','$email','$password','$Cpassword','$birthday','$gender')";
            $result = $con->query($insert_users);
        }
    ?>
    <div class="header">
        <p>Register</p>
    </div>
    <form method="post" action="register.php">
        <div class="input-first">
            <input type="text" name="fname" require placeholder="First Name">
        </div>
        <div class="input-last">
            <input type="text" name="lname" require placeholder="Last Name">
        </div>

        <div class="input-form">
            <input type="text" name="email" require placeholder="Email">
        </div>
        <div class="input-form">
            <input type="password" name="password" require placeholder="Password">
        </div>
        <div class="input-form">
            <input type="password" name="Cpassword" require placeholder="Comfirm Password">
        </div>
        <div class="input-form">
            <label>Birthday:</label>
            <input type="date" name="birthday">
        </div> 
        <div >
            <p>Gender:</p>
            <div class="btn-radio">
                <input  type="radio" name="gender" value="male">
                <labeL>Male</label>
            </div>

            <div class="btn-radio"style="margin-left:1%">
                <input type="radio" name="gender" value="female">
                <label >Female</label>
            </div>

            <div class="btn-radio" style="margin-left:1%">
                <input type="radio" name="gender" value="other">
                <label>Other</label>
            </div>
        </div>
        <!-- <div class="input-form">
            <select>
                <option value="0" >DAY</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
            </select>
            <select>
                <option value="0" >MONTHS</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
            </select>
            <select>
                <option value="0" >YEARS</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
            </select>
        </div> -->
        <p>Already a member? <a  href="register.php">Login</a>
        <button type="submit" class="btn-register" name="insert">Register</button>
    </form>
    
</body>
</html>