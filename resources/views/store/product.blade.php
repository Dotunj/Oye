<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zoe Shop</title>
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
        <div id="aside" class="app-aside modal fade nav-dropdown">
            <div class="left navside grey dk" data-layout="column">
                <div class="navbar no-radius">
                    <a href="index.html" class="navbar-brand md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                            <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)" />
                            <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color" />
                            <circle cx="24" cy="24" r="10" fill="#ffffff" />
                            <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate" />
                            <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
                            <circle cx="24" cy="24" r="3" fill="#000000" />
                        </svg> <img src="images/logo.png" alt="." class="hide"> <span class="hidden-folded inline">Oyela</span>
                    </a>
                </div>
                <div data-flex class="hide-scroll">
                    <nav class="scroll nav-stacked nav-active-primary">
                        <ul class="nav" data-ui-nav>
                            <li class="nav-header hidden-folded"><span class="text-xs text-muted">Main</span>
                            </li>
                            <li><a href="player.html"><span class="nav-icon"><i class="material-icons">play_circle_outline</i></span> <span class="nav-text">Discover</span></a>
                            </li>
                            
                            <li><a data-toggle="modal" data-target="#search-modal"><span class="nav-icon"><i class="material-icons">search</i></span> <span class="nav-text">Search</span></a>
                            </li>
                            <li class="nav-header hidden-folded m-t"><span class="text-xs text-muted">Your collection</span>
                            </li>
                            <li><a href="profile.html#tracks"><span class="nav-label"><b class="label">8</b></span> <span class="nav-icon"><i class="material-icons">list</i></span> <span class="nav-text">Tracks</span></a>
                            </li>
                            <li><a href="profile.html#playlists"><span class="nav-icon"><i class="material-icons">queue_music</i></span> <span class="nav-text">Playlists</span></a>
                            </li>
                            <li><a href="profile.html#likes"><span class="nav-icon"><i class="material-icons">favorite_border</i></span> <span class="nav-text">Likes</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div data-flex-no-shrink>
                    <div class="nav-fold dropup">
                        <div class="dropdown-menu w dropdown-menu-scale"><a class="dropdown-item" href="profile.html#profile"><span>Profile</span></a> <a class="dropdown-item" href="profile.html#tracks"><span>Tracks</span></a> <a class="dropdown-item" href="profile.html#playlists"><span>Playlists</span></a> <a class="dropdown-item" href="profile.html#likes"><span>Likes</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="docs.html">Need help?</a> <a class="dropdown-item" href="signin.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="app-content white bg box-shadow-z2" role="main">
            <div class="app-header hidden-lg-up white lt box-shadow-z1">
                <div class="navbar">
                    <a href="index.html" class="navbar-brand md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                            <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)" />
                            <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color" />
                            <circle cx="24" cy="24" r="10" fill="#ffffff" />
                            <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate" />
                            <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
                            <circle cx="24" cy="24" r="3" fill="#000000" />
                        </svg> <img src="images/logo.png" alt="." class="hide"> <span class="hidden-folded inline">MFM</span>
                    </a>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item"><a data-toggle="modal" data-target="#aside" class="nav-link"><i class="material-icons">menu</i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="app-body" id="view">
                <div class="padding">
                    <div class="box">
                        <div class="box-header">
                            <h3>{{$product->title}}</h3>
                        </div>
                         <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                
                                           <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">
                                                <div class="item-media">
                                       
                                               <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b4.jpg')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-overlay bottom text-right"><a href="browse.html#" class="btn-favorite"><i class="fa fa-heart-o"></i></a> <a href="browse.html#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu pull-right black lt"></div>
                                                    </div>
                                                   
                                                    <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted"></a>

                                                    </div>
                                                    
                                                </div>

                                            </div>
                                                
                                        </div>
                                              
                                </div> 

                            </div>
                            <script>
                       function work(){
                     var email = $('#email').val();
                     var amount = '{{$product->price * 100}}';
                     var ref = Math.random().toString(36).substr(2, 5);

                    var handler = PaystackPop.setup({
                    key: 'pk_test_72d76cf5327a1ca0fd18c59949f848f39baa1f27',
                     email: email, 
                      amount: amount,

                      ref:ref,


                          callback:function(response){
                            alert('transaction was successful');
                          },
                          });
                        handler.openIframe();
                      }
        

                        </script>
                   <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                        <button type="button" class="btn btn-outline b-primary text-primary" onclick="work();">Purchase N{{$product->price}}</button>
                    </form>
                        </div>
                               
                    </div>
                </div>
            </div>
    </div>
     <script src="{!! asset('scripts/app.min.js') !!}">></script>
     <script src="{!! asset('scripts/payment.js') !!}">></script>
</body>

</html>