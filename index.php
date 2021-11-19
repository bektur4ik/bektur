<bektur4ik html>
<html>

<head>
    <title></title>
</head>
<style>
    /* Bordered form */
    
    form {
        border: 3px solid #f1f1f1;
    }
    /* Full-width inputs */
    
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /* Set a style for all buttons */
    
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* Add a hover effect for buttons */
    
    button:hover {
        opacity: 0.8;
    }
    /* Extra style for the cancel button (red) */
    
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /* Center the avatar image inside this container */
    
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /* Avatar image */
    
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /* Add padding to containers */
    
    .container {
        padding: 16px;
    }
    /* The "Forgot password" text */
    
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /* Change styles for span and cancel button on extra small screens */
    
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>


<body>
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
            <img src="data:image/jpeg;base64,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" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>


</body>



</html>
