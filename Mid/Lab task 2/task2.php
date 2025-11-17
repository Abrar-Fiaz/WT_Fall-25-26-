<!DOCTYPE html>
<html>
<head>
    
    <title>Participent Regristration</title>
</head>
<body>
    <h1>Participant Regristration </h1>
    
    <p> Full Name</p>
    <input type="text" id="full name">
    <p>Email</p>
    <input type="email" id="email">
    <p>Phone number</p>
    <input type="text" id="phonenumber">
    <p>Password</p>
    <input type="password" id="password"> 
    <p>Confirm Password</p>
    <input type="password" id="confirmpassword">
    <p><input type="submit" value="register"></p>
    <div id="participant error"></div>
    <div id="participant output"></div>

    <h2>Activity Selection</h2>
    <p>Activity Name</p>
    <input type="text" id="activityname">
    <p><input type="submit" value="add Activity"></p>
    <div id="activity error"></div>
    <div id="activity output"></div>
    <script>
        function participantregistration (){
            let name= document.getElementById("fullname").value.trim();
            let email=document.getElementById("email").value.trim();
            let phone number=document.getElementById("phonenumber").value.trim();
            let password=document.getElementById("password").value.trim();
        }
    </script>
    

    
   


     



</body>
</html>