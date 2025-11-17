<!DOCTYPE html>
<html>
<head>
   
    <title>Student Regristration </title>
</head>
<style>
    body{
        margin-left: 400px;
        margin-right:400px;
    }


</style>
<body>


<center><h1 style="color:red; border-bottom:2px solid red">Student Regristration Information</h1></center> 
    
    <p>First Name</p>
    <input type="text" style= "width: 100%;">
   
    <p>Last Name</p>
    <input type="text" style= "width: 100%;">
   
    <p>Stdent id</p>
    <input type="text" style= "width: 100%;">
   
    <p>program/major</p>
    <input type="text" style= "width: 100%;">

    <p>Department</p>
   <select name="department" id="dep" style= "width: 100%;">
 <option value="cse">cse</option>
  <option value="EEE">EEE</option>
  <option value="BBA">BBA</option>
  <option value="IPE">IPE</option>
</select>

    <p>Phone</p>
    <input type="text" style= "width: 100%;">

    <p>university Email</p>
    <input type="email" style= "width: 100%;">

    <p>create password</p>
     <input type="password" style= "width: 100%;">

     <p>confirm password</p>
     <input type="password" style= "width: 100%;">

     <p style="font-weight:bold";>semester selection</p>
     <input type="radio"name="semester"> summer 2024
     <input type="radio"name="semester"> fall 2024
     <input type="radio"name="semester"> spring 2025
     <input type="radio"name="semester"> other/special terms

     <p>requested credit load</p>
       <input type="number" style= "width: 100%;">
       
     <p><input type="checkbox">i require academic advising before final registration</p>

     <h4 style="color:red; border-bottom:1px solid red">Course Selection </h4>
     <p>
        <input type="checkbox"> MAth 1201(calculas)
        <input type="checkbox"> cs 2105 (data structure)
        <input type="checkbox"> Econ 1001(microeconomics)
        <input type="checkbox"> phy 1102 (physics lab)




     </p>
      
     <p>comments/Special requirment</p>
     <input type="text" style= "width: 100%; height: 100px;">
</body>
</html>