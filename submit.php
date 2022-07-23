<?php
$m1=$_POST['lname'];
$m2=$_POST['fname'];
$m3=$_POST['phone'];
$m4=$_POST['email'];
$query="insert into data(fname,lname,phone,email) values('$m1','$m2','$m3','$m4')"; 
$link=mysqli_connect("localhost","root","","form_one_mordad");
if(mysqli_query($link,$query))
{

    echo("<p style='color:green;'><b>"."عضویت شما با موفقیت انجام شد "."</b></p>");
}

else {
    echo("<p style='color:red;'><b> &nbsp &nbsp &nbsp عضویت شما انجام نشد</b></p>");
}
?> 
