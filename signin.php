<?php
$con=mysqli_connect('localhost','root','','hbooking');
if(mysqli_connect_error()){
    echo 'failed'.mysqli_connect_error();
}
session_start();
$query="select Email from signup";
$result1=mysqli_query($con,$query) ;
$data=array();
while($rows=mysqli_fetch_array($result1)){
    $data[]=$rows['Email'];
}
$query1="select Password from signup";
$result2=mysqli_query($con,$query1) ;
$data1=array();
while($rows1=mysqli_fetch_array($result2)){
    $data1[]=$rows1['Password'];
}
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <style>
        div{
            background-color: white;
            width: 40%;
            height: 60%;
            margin:0 auto;
            border: 30px solid white;
        }
        div{
            margin-top: 80px;
        }
        input{
            height:40px; font-size:14pt;
        }
    </style>
    <script>
        function verifypassword(){
            var user=<?php echo json_encode($data)?>;
            var pw = document.getElementById("emi").value;
            var user1=<?php echo json_encode($data1)?>;
            var pw1 = document.getElementById("pws").value;
            var i;
            flag1=0;
            for(i=0;i<user.length;i++){
                if(pw==user[i]){
                    flag1=1;
                    break;
                }
            }
            flag2=0;
            for(i=0;i<user.length;i++){
                if(pw1==user1[i]){
                    flag2=1;
                    break;
                }
            }
            if(flag1==1 && flag2==1){
                alert("Login Successfully");
            }else{
                document.getElementById("message1").innerHTML = "**Incorrect Email Address and password";
                return false;
            }
        }
    </script>
    <body style="background-color:#E8E8E8">
        <form onsubmit="return verifypassword()" action="content.php" method="POST">
            <div>
                <span><h1>Sign in</h1>For security, please sign in to access your information</span></h1>
                <br><br>
                <span>Email <br><input type="text" name="email" placeholder="Email" size="50px" id="emi" required></span><br>
                <br><br><br>
                <span>Password <br><input type="password" name="password" placeholder="Password" size="50px" id="pws" required></span><br>
                <span id = "message1" style="color:red"> </span>
                <br><br><br>
                <center><input type="submit" value="Sign Up" style="background-color:#0066cc;color:white;width: 40%;height:40px;border-radius: 10px;"></center>            </div>
        </form>
    </body>
</html>