{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: blue;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 40px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #000;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 40px;
    width: 100%;
    background-color: #fff;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #080710;
    font-size: 16px;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: green;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

button:hover{
    margin-top: 50px;
    width: 100%;
    background-color: orangered;
    color: blue;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
a:hover{
    color: blue; 
    text-decoration:none;
    
}
a{
    color: white; 
    text-decoration:none;
}
</style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Connexion</h3>
        <label for="username">E-mail</label>
        <input type="text" placeholder="E-mail" id="username">
        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Mot de passe" id="password">
        <button><a href="{{route('dashboard')}}" type="submit" >Connexion</a></button>
        <button><a href="{{route('dashboard')}}" type="submit" >Connexion</a></button>
    </form>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Travel - Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('admin/assets/img/favicon.ico')}}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Connexion</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  @csrf
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                        <a href="{{route('dashboard')}}" style="color: white; text-decoration:none">Connexion</a>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('admin/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('admin/assets/js/custom.js')}}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>