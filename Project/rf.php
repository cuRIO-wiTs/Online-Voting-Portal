<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RF</title>
    <link rel="stylesheet" type="text/css" href="rf.css">
</head>

<body>
    <form action="register.php" method="POST">
    <div class="wrapper">
        <div class="title">
            Registration form
        </div>
        
        <div class="form">

            
            <div class="inputBox">
                <label>Full Name</label>
                <input type="text" class="input" id="fullname" name="fullname">
            </div>
            <div class="inputBox">
                <label>Registration Number</label>
                <input type="number" class="input" id="register" name="register">
            </div>
            <div class="inputBox">
                <label>Email</label>
                <input type="text" class="input" id="email" name="email">
            </div>
            <div class="inputBox">
                <label>Branch</label>
                <input type="text" class="input" id="branch" name="branch">
            </div>
            <div class="inputBox">
                <label>Phone Number</label>
                <input type="number" class="input" id="phone" name="phone">
            </div>
            <div class="inputBox" >
                <label>Gender</label>
                <label class="customselect">
                    <select>
                        <option id="gender" name="gender" value="select">Select</option>
                        <option id="gender" name="gender" value="male">Male</option>
                        <option id="gender" name="gender" value="female">Female</option>
                    </select>
                </label>
            </div>
           <div class="inputBox terms">
                <label class="check">
                    <input type="checkbox" required="required">
                    <span class="checkmark"></span>
                </label>
                <p>Agree</p>
            </div>
            <div class="inputBox">
                <input type="submit" value="Submit" class="btn">
            </div>
        
         </div>
       
    </div>
 </form>
</body>
</html>