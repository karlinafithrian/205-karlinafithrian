<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="icon" href="{{asset('./klikticket/assets/images/fav.png')}}" />
    <link rel="shortcut icon" href="{{asset('./klikticket/assets/images/fav.png')}}" />
    <title>KLIKTICKET</title>
    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('klikticket/login-signup/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('klikticket/login-signup/assets/css/fontawesome.css')}}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('klikticket/login-signup/assets/css/login.css')}}">
</head>

<body>
    <!-- 01 Preloader -->
    <!-- <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div> -->
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div class="content-detail">
                        <!-- Login form -->
                        <form class="login-form" method="post" action="{{ route('postlogin') }}">
                            {{ csrf_field() }}
                            <div class="imgcontainer">
                                <img src="{{asset('klikticket/login-signup/assets/images/logo-dark2.png')}}" alt="Avatar" class="avatar">
                            </div>
                            <div class="input-control">
                                <input type="text" name="email" placeholder="Enter Email" autofocus required value="{{ old ('email')}}">
                                <span class="password-field-show @error('email') is-invalid @enderror">
                                    @error('email')
                                    <div class="in-invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="password" placeholder="Enter Password" name="password"
                                        class="password-field @error('password') is-invalid @enderror" required>
                                    <span data-toggle=".password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        @error('password')
                                        <div class="in-invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </span>
                                <label class="label-container">Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="psw"><a href="#" class="forgot-btn" onclick="alert('Mohon hubungi admin')">Forgot password?</a></span>                                <div class="login-btns">
                                    <button type="submit">Login</button>
                                </div>
                                <div class="login-with-btns">
                                    <span class="already-acc">Not a member? <a href="/register"
                                            class="signup-btn">Sign up</a></span>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{asset('klikticket/login-signup/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- theme particles script -->
    <script src="{{asset('klikticket/login-signup/assets/js/particles.min.js')}}"></script>
    <script src="{{asset('klikticket/login-signup/assets/js/app.js')}}"></script>
    <!-- Theme js-->
    <script src="{{asset('klikticket/login-signup/assets/js/script.js')}}"></script>
    <script>
        // Function to display the error pop-up
        function showErrorPopup() {
            alert("Username or password is incorrect. Please try again.");
        }
    </script>
    @if (Session::has('error'))
    <script>
        // Show the error pop-up after the page loads
        window.addEventListener('DOMContentLoaded', (event) => {
            showErrorPopup();
        });
    </script>
    @endif
</body>

</html>
