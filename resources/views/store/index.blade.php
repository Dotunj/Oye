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
                        </svg> <img src="images/logo.png" alt="." class="hide"> <span class="hidden-folded inline">Oyela</span>
                    </a>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item"><a data-toggle="modal" data-target="#aside" class="nav-link"><i class="material-icons">menu</i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="app-body" id="view">
                <div class="page-content">
                    <div class="row-col">
                        <div class="col-lg-9 b-r no-border-md">
                            <div class="padding">
                                <div class="page-title m-b">
                                    <h1 class="inline m-a-0">MFM Youth Church</h1>
                                    <div class="dropdown inline">
                                        <div class="dropdown-menu"><a href="browse.html#" class="dropdown-item active">All</a> <a href="browse.html#" class="dropdown-item">acoustic</a> <a href="browse.html#" class="dropdown-item">ambient</a> <a href="browse.html#" class="dropdown-item">blues</a> <a href="browse.html#" class="dropdown-item">classical</a> <a href="browse.html#" class="dropdown-item">country</a> <a href="browse.html#" class="dropdown-item">electronic</a> <a href="browse.html#" class="dropdown-item">emo</a> <a href="browse.html#" class="dropdown-item">folk</a> <a href="browse.html#" class="dropdown-item">hardcore</a> <a href="browse.html#" class="dropdown-item">hip hop</a> <a href="browse.html#" class="dropdown-item">indie</a> <a href="browse.html#" class="dropdown-item">jazz</a> <a href="browse.html#" class="dropdown-item">latin</a> <a href="browse.html#" class="dropdown-item">metal</a> <a href="browse.html#" class="dropdown-item">pop</a> <a href="browse.html#" class="dropdown-item">pop punk</a> <a href="browse.html#" class="dropdown-item">punk</a> <a href="browse.html#" class="dropdown-item">reggae</a> <a href="browse.html#" class="dropdown-item">rnb</a> <a href="browse.html#" class="dropdown-item">rock</a> <a href="browse.html#" class="dropdown-item">soul</a> <a href="browse.html#" class="dropdown-item">world</a>
                                        </div>
                                    </div>
                                </div>
                                   
                                                                 
                                            <div class="row">
                                           @foreach($products as $product)
                                            <div class="col-xs-4 col-sm-4 col-md-3">
                                
                                           <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">
                                                <div class="item-media">
                                       
                                               <a href="{!! action('StoreController@show', $product->slug) !!}" class="item-media-content" style="background-image: url('images/b4.jpg')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-overlay bottom text-right"><a href="browse.html#" class="btn-favorite"><i class="fa fa-heart-o"></i></a> <a href="browse.html#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu pull-right black lt"></div>
                                                    </div>
                                                    <div class="item-title text-ellipsis"><a href="">{{$product->title}}</a>
                                                    </div>
                                                    <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">N{{$product->price}}</a>

                                                    </div>
                                                    
                                                </div>

                                            </div>
                                                
                                        </div>
                                        @endforeach
                                
                                </div>

                            </div>
                        </div>
                       
                        
                        <div class="col-lg-3 w-xxl w-auto-md">
                            <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent">
                                <h6 class="text text-muted">5 Likes</h6>
                                <div class="row item-list item-list-sm m-b">
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-9" data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media">
                                                <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b8.jpg')"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title text-ellipsis"><a href="track.detail.html">All I Need</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-8" data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media">
                                                <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b7.jpg')"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title text-ellipsis"><a href="track.detail.html">Simple Place To Be</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">RYD</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-7" data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media">
                                                <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b6.jpg')"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title text-ellipsis"><a href="track.detail.html">Reflection (Deluxe)</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Fifth Harmony</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-10" data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                            <div class="item-media">
                                                <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b9.jpg')"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title text-ellipsis"><a href="track.detail.html">The Open Road</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">
                                            <div class="item-media">
                                                <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b4.jpg')"></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title text-ellipsis"><a href="track.detail.html">Live Radio</a>
                                                </div>
                                                <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text text-muted">Go mobile</h6>
                                <div class="btn-groups"><a href="" class="btn btn-sm dark lt m-r-xs" style="width: 135px"><span class="pull-left m-r-sm"><i class="fa fa-apple fa-2x"></i></span> <span class="clear text-left l-h-1x"><span class="text-muted text-xxs">Download on the</span> <b class="block m-b-xs">App Store</b></span></a> <a href="" class="btn btn-sm dark lt" style="width: 133px"><span class="pull-left m-r-sm"><i class="fa fa-play fa-2x"></i></span> <span class="clear text-left l-h-1x"><span class="text-muted text-xxs">Get it on</span> <b class="block m-b-xs m-r-xs">Google Play</b></span></a>
                                </div>
                                <div class="b-b m-y"></div>
                                <div class="nav text-sm _600"><a href="browse.html#" class="nav-link text-muted m-r-xs">About</a> <a href="browse.html#" class="nav-link text-muted m-r-xs">Contact</a> <a href="browse.html#" class="nav-link text-muted m-r-xs">Legal</a> <a href="browse.html#" class="nav-link text-muted m-r-xs">Policy</a>
                                </div>
                                <p class="text-muted text-xs p-b-lg">&copy; Copyright 2016</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal white lt fade" id="search-modal" data-backdrop="false"><a data-dismiss="modal" class="text-muted text-lg p-x modal-close-btn">&times;</a>
            <div class="row-col">
                <div class="p-a-lg h-v row-cell v-m">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action="search.html" class="m-b-md">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Type keyword" data-ui-toggle-class="hide" data-ui-target="#search-result"> <span class="input-group-btn"><button class="btn b-a no-shadow white" type="submit">Search</button></span>
                                </div>
                            </form>
                            <div id="search-result" class="animated fadeIn">
                                <p class="m-b-md"><strong>23</strong> <span class="text-muted">Results found for:</span><strong>Keyword</strong>
                                </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row item-list item-list-sm item-list-by m-b">
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-9" data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media">
                                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b8.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="track.detail.html">All I Need</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-10" data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media">
                                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b9.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="track.detail.html">The Open Road</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Postiljonen</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-2" data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media">
                                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b1.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="track.detail.html">Fireworks</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Kygo</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item r" data-id="item-4" data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                    <div class="item-media">
                                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('images/b3.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="track.detail.html">What A Time To Be Alive</a>
                                                        </div>
                                                        <div class="item-author text-sm text-ellipsis"><a href="artist.detail.html" class="text-muted">Judith Garcia</a>
                                                        </div>
                                                        <div class="item-meta text-sm text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row item-list item-list-sm item-list-by m-b">
                                            <div class="col-xs-12">
                                                <div class="item">
                                                    <div class="item-media rounded">
                                                        <a href="artist.detail.html" class="item-media-content" style="background-image: url('images/a1.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="artist.detail.html">James Garcia</a>
                                                            <div class="text-sm text-muted">9 songs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item">
                                                    <div class="item-media rounded">
                                                        <a href="artist.detail.html" class="item-media-content" style="background-image: url('images/a8.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="artist.detail.html">Sara King</a>
                                                            <div class="text-sm text-muted">14 songs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item">
                                                    <div class="item-media rounded">
                                                        <a href="artist.detail.html" class="item-media-content" style="background-image: url('images/a9.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="artist.detail.html">Douglas Torres</a>
                                                            <div class="text-sm text-muted">20 songs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="item">
                                                    <div class="item-media rounded">
                                                        <a href="artist.detail.html" class="item-media-content" style="background-image: url('images/a5.jpg')"></a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-title text-ellipsis"><a href="artist.detail.html">Judy Woods</a>
                                                            <div class="text-sm text-muted">23 songs</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="top-search" class="btn-groups"><strong class="text-muted">Top searches:</strong> <a href="browse.html#" class="btn btn-xs white">Happy</a> <a href="browse.html#" class="btn btn-xs white">Music</a> <a href="browse.html#" class="btn btn-xs white">Weekend</a> <a href="browse.html#" class="btn btn-xs white">Summer</a> <a href="browse.html#" class="btn btn-xs white">Holiday</a> <a href="browse.html#" class="btn btn-xs white">Blue</a> <a href="browse.html#" class="btn btn-xs white">Soul</a> <a href="browse.html#" class="btn btn-xs white">Calm</a> <a href="browse.html#" class="btn btn-xs white">Nice</a> <a href="browse.html#" class="btn btn-xs white">Home</a> <a href="browse.html#" class="btn btn-xs white">SLeep</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="share-modal" class="modal fade animate">
            <div class="modal-dialog">
                <div class="modal-content fade-down">
                    <div class="modal-header">
                        <h5 class="modal-title">Share</h5>
                    </div>
                    <div class="modal-body p-lg">
                        <div id="share-list" class="m-b"><a href="" class="btn btn-icon btn-social rounded btn-social-colored indigo" title="Facebook"><i class="fa fa-facebook"></i> <i class="fa fa-facebook"></i></a> <a href="" class="btn btn-icon btn-social rounded btn-social-colored light-blue" title="Twitter"><i class="fa fa-twitter"></i> <i class="fa fa-twitter"></i></a> <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-600" title="Google+"><i class="fa fa-google-plus"></i> <i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-icon btn-social rounded btn-social-colored blue-grey-600" title="Trumblr"><i class="fa fa-tumblr"></i> <i class="fa fa-tumblr"></i></a> <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-700" title="Pinterst"><i class="fa fa-pinterest"></i> <i class="fa fa-pinterest"></i></a>
                        </div>
                        <div>
                            <input class="form-control" value="http://plamusic.com/slug">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{!! assets('scripts/app.min.js') !!}">></script>
</body>

</html>