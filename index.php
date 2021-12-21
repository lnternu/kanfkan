<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
    <link rel="stylesheet" href="https://github.com/">
  <title>Login <a>href: https://cloud.google.com/ <a> </title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<style> background-image: url('https://ordinaryfaith.net/wp-content/uploads/2016/03/Gray-plain-website-background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  
  .login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  
  }
  .form {
    position: relative;
    z-index: 1;
    background: #48c9b0;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    
  }
  .form input {
    font-family: FontAwesome, "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  border-radius:10px;
    
  }
  .form button {
    font-family: "Titillium Web", sans-serif;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: .1em;
    outline: 0;
    background: #17a589;
    width: 100%;
    border: 0;
  border-radius:30px;
    margin: 0px 0px 8px;
    padding: 15px;
    color: #FFFFFF;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    transition: all 0.2s;
  
  }
  .form button:hover,.form button:focus {
    background: #148f77;
     box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transform: translateY(-4px);
  }
  .form button:active {
    transform: translateY(2px);
    box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
  }
  
  .form .message {
    
    margin: 6px 6px;
    color: #808080;
    font-size: 11px;
    text-align: center;
    font-weight: bold;
    font-style: normal;
  
    
  
  }
  .form .message a {
    color: #FFFFFF;
    text-decoration: none;
    font-size: 13px;
  }
  .form .register-form {
    display: none;
  }
  .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
  }
  .container:before, .container:after {
    content: "";
    display: block;
    clear: both;
  }
  .container .info {
    margin: 50px auto;
    text-align: center;
  }
  .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
  }
  .container .info span {
    color: #4d4d4d;
    font-size: 12px;
  }
  .container .info span a {
    color: #000000;
    text-decoration: none;
  }
  .container .info span .fa {
    color: #EF3B3A;
  }
  body {
    background: #76b852; /* fallback for old browsers */
    background: -webkit-linear-gradient(right, #76b852, #8DC26F);
    background: -moz-linear-gradient(right, #76b852, #8DC26F);
    background: -o-linear-gradient(right, #76b852, #8DC26F);
    background: linear-gradient(to left, #76b852, #8DC26F);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;    
  } </style>
</head>


<body class="body">
	
	<a href="https://github.com/Mehedi61/Login-form-Sign-up-form"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png"></a>

<div class="login-page">
  <div class="form">

    <form>
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="text" placeholder="&#xf007;  username"/>
      <input type="password" id="password" placeholder="&#xf023;  password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button>LOGIN</button>
      <p class="message"></p>
    </form>

    <form class="login-form">
      <button type="button" onclick="window.location.href='signup.html'">SIGN UP</button>
    </form>
  </div>
</div>

  <script>
data = {
    user: "abdu",
    pass: "2005",
}

let accept = () =>{
    let userName = document.getElementById('user').value
    let password = document.getElementById('pass').value
    if (data.user == userName && data.pass == password) {
        window.location.href = 'https://timati04.herokuapp.com/'
    }else{
        alert("invalid password, try again later")
    }
  
}
    
  </script>
</body>
</html>
