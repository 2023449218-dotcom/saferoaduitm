<!DOCTYPE html>

<html>

<head>

<link
rel="icon"
href="images/logo.png">

<title>SafeRoad UiTM | Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(
135deg,
#3b0066,
#7b0fcf
);
overflow:hidden;
}

.container{
width:1000px;
height:600px;
background:white;
border-radius:25px;
overflow:hidden;
display:flex;
box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

.left{
width:50%;
background:linear-gradient(
180deg,
#6A0DAD,
#B565F5
);
color:white;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:40px;
text-align:center;
}

.left img{
width:250px;
margin-bottom:30px;
filter:drop-shadow(
0px 0px 12px rgba(255,255,255,0.6)
);
}

.left h1{
font-size:50px;
margin-bottom:20px;
}

.left p{
font-size:18px;
line-height:1.8;
}

.right{
width:50%;
display:flex;
justify-content:center;
align-items:center;
background:white;
}

.login-box{
width:75%;
}

.login-box h2{
font-size:45px;
color:#5E2D91;
margin-bottom:10px;
}

.login-box p{
color:#777;
margin-bottom:30px;
}

.input-group{
margin-bottom:20px;
}

.input-group label{
display:block;
font-weight:bold;
margin-bottom:8px;
}

.input-group input{
width:100%;
padding:15px;
border:1px solid #ddd;
border-radius:12px;
font-size:15px;
}

.input-group input:focus{
outline:none;
border-color:#5E2D91;
}

.btn-login{
width:100%;
padding:15px;
border:none;
border-radius:12px;
background:#5E2D91;
color:white;
font-size:16px;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

.btn-login:hover{
background:#4b2374;
}

.footer{
text-align:center;
margin-top:20px;
font-size:13px;
color:#777;
}
</style>

</head>

<body>

<div class="container">

   <div class="left">

        <img
        src="images/logo.png"
        alt="SafeRoad Logo">

        <h1>SafeRoad UiTM</h1>

        <p> A traffic complaint system to improve campus traffic safety, road monitoring, and complaint management inside UiTM Shah Alam.</p>

        </div>

    <div class="right">

        <div class="login-box">

            <h2>Welcome</h2>

            <p>Login using your User ID or Username.</p>

            <form action="login_process.php" method="POST">

                <div class="input-group">

                    <label>ID Number/Username</label>

                    <input
                        type="text"
                        name="userid"
                        placeholder="Enter your User ID or Username"
                        required>

                </div>

                <div class="input-group">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required>

                </div>

                <button type="submit"
                class="btn-login">
                Login
                </button>

                <div class="footer">

                        © 2026 SafeRoad UiTM

                        </div>

            </form>

        </div>

    </div>

</div>

</body>

</html>