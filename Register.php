<html>
    <head>
        <title>

        </title>
    </head>
    <style>
        div{
            background-color: white;
            width: 40%;
            height: 100%;
            margin:0 auto;
            padding: 20px;
        }
        div{
            margin-top: 20px;
        }
        input{
            height:40px; font-size:14pt;
        }

    }
    </style>
    <script>
        function verifypassword(){
            var pw = document.getElementById("pswd").value;
            var cpw=document.getElementById("cpswd").value;
            if(pw.length<8){
                document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
             return false;
            }
            if(pw.length > 15){
                document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
             return false;
            }
            if(pw!=cpw){
                document.getElementById("message1").innerHTML = "**Confirm password did`nt matched";
             return false;
            }
            else{
                alert("account created successfully");
            }
        }
        </script>
    <body style="background-color:#E8E8E8">
        <form onsubmit="return verifypassword()" action="content.php" method="POST">
            <div>
                <h1>Sign Up</h1>
                <br>
                <span>First Name <br><input type="text" name="First_Name" placeholder="First Name" size="50px" id="fis" required></span><br>
                <br><br>
                <span>Last Name <br><input type="text" name="Last_Name" placeholder="Last Name" size="50px" id="lsf" required></span><br>
                <br><br>
                <span>Email <br><input type="text" name="Email" placeholder="Email" size="50px" id="email" required></span><br>
                <br><br>
                <span>Password <br><input type="password" name="Password" id="pswd" placeholder="Password" size="50px" required></span><br>
                <span id = "message" style="color:red"> </span>
                <br><br>
                <span>Confirm Password <br><input type="password" name="C_Password" id="cpswd" placeholder="Confirm Password" size="50px" required></span><br>
                <span id = "message1" style="color:red"> </span>
                <br>
                <span><input type="radio" name="" id="">Email me exclusive promotions. I can opt out later as started in the privacy poilcy.</span>
                <br>
                <input type="submit" value="Sign Up" style="background-color:#0066cc;border:none;color:white;width: 40%;height:40px;border-radius: 10px;margin-left:150px;">
            </div>
        </form>
    </body>
</html>