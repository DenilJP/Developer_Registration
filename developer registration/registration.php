<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <h1 class="head">Registration<span class="web">(WebDeveloper)</span></h1>
            <form method="POST" action="#">
                <div class="form">
                    <div class="inform">
                        <label name="First Name">First Name</label>
                        <input class="inp" type="text" name="fname" placeholder="Enter Your Name">    
                    </div>
                    <div class="inform">
                        <label name="Last Name">Last Name</label>
                        <input class="inp" type="text" name="lname" placeholder="Enter Your LastName">    
                    </div>
                    <div class="inform">
                        <label name="Email">Email</label>
                        <input class="inp" type="text" name="email" placeholder="Enter Your Email">    
                    </div>
                    <div class="inform">
                        <label name="Email">Password</label>
                        <input class="inp" type="password" name="password" placeholder="Enter Password" >
                    </div>  
                    <div class="inform">
                        <label name="jobrole">JOB Role</label>
                        <select class="inp" name="jobrole" id="JobRole">
                            <option value="Select Job Role">Select Job Role</option>
                            <option value="Frontend">Frontend</option>
                            <option value="Backend">Backend</option>
                            <option value="FullStack">FullStack</option>
                            <option value="UI UX">UI UX</option>
                        </select>    
                    </div>
                    <div class="txtarea">
                        <label name="Address">Address</label>
                        <textarea class="inp" row="5" cols="50" name="address" placeholder="Enter Your Address"></textarea>    
                    </div>
                    <div class="inform">
                        <label name="City">City</label>
                        <input class="inp" type="text" name="city" placeholder="Enter Your City">    
                    </div>
                    <div class="inform">
                        <label name="Gender">Gender</label>
                        <div class="gender">
                        <input class="inp" type="radio" id="Male" name="male" value="Male">
                        <label class="gender" name="gender"><pre> Male</pre></label></div>
                        <div class="gender">
                        <input class="inp" type="radio" id="Female" name="female" value="Female">
                        <label class="gender"  name="gender"><pre> Female</pre></label></div>
                        <div class="gender">
                        <input class="inp" type="radio" id="Other" name="other" value="Other">
                        <label class="gender"  name="gender"><pre> Other</pre></label></div>               
                    </div>
                    <div class="inform">
                        <label name="PinCOde">PinCode</label>
                        <input class="inp" type="number" name="pincode" placeholder="Enter Your PinCode">    
                    </div>
                    <div class="inform">
                        <label name="Date">Date</label>
                        <input type="date" class="inp" value="2022-01-10"  name="date"  id="date">    
                    </div>
                    <div class="check">
                        <input class="inp" type="checkbox">
                        <span class="checkmark"></span>
                        <pre>  Agree Terms And Condition</pre>
                    </div>
                    <div class="button">
                        <button class="inp" type="submit" value="register" name="register"><b>Register</b></buttton>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php 
    if($_POST['register'])
    {
        $fname    =$_POST['fname'];
        $lname    =$_POST['lname'];
        $email    =$_POST['email'];
        $password =$_POST['password'];
        $jobrole  =$_POST['jobrole'];
        $address  =$_POST['address'];
        $city     =$_POST['city'];
        $gender   =$_POST['gender'];
        $pincode  =$_POST['pincode'];
        $date     =$_POST['date'];

        $sql = "insert into form values ($fname,$lname,$email,$password,$jobrole,$address,$city,$gender,$pincode,$date)";
         
        $result = mysqli_querry($conn,$sql);

        if($result)
        {
            echo"Data Inserted Into Database";
        }
        else
        {
            echo"failed";
        }
    }
?>