<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Oye - Content distribution platform</title>
    <meta name="description" content="Music, Musician, Bootstrap">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
    <link rel="stylesheet" href="{!! asset('css/animate.css/animate.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/glyphicons/glyphicons.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/font-awesome/css/font-awesome.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/material-design-icons/material-design-icons.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/bootstrap/dist/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/styles/app.min.css') !!}">
</head>

<body>
    <div class="app dk" id="app">
        <div class="padding">
            <div class="navbar">
                <div class="pull-center">
                    <a href="index.html" class="navbar-brand md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                            <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)" />
                            <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color" />
                            <circle cx="24" cy="24" r="10" fill="#ffffff" />
                            <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate" />
                            <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
                            <circle cx="24" cy="24" r="3" fill="#000000" />
                        </svg> <img src="images/logo.pnng" alt="." class="hide"> <span class="hidden-folded inline">Oyela</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="b-t">
            <div class="center-block w-xxl w-auto-xs p-y-md text-center">
                <div class="p-a-md">
                    <form action ="{{url('login') }}" method="post" name="form">
                        {{csrf_field()}}
                         <div class="row">
                    @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status')}}
                   </div>
                @endif
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"placeholder="password" required>
                        </div>
                        <div class="m-b-md">
                            <label class="md-check">
                                <input type="checkbox"><i class="primary"></i> Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-lg black p-x-lg">Sign in</button>
                    </form>
                    <div class="m-y"><a href="forgot-password.html" class="_600">Forgot password?</a>
                    </div>
                    <div>Do not have an account? <a href="signup.html" class="text-primary _600">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="{!! assets('scripts/app.min.js') !!}">></script>
</body>

</html>