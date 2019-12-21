@extends('layouts.app')
<style type="text/css">
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
    }
    @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
    .fa-2x {
    font-size: 2em;
    }
    .fa {
    position: relative;
    display: table-cell;
    width: 60px;
    height: 36px;
    text-align: center;
    vertical-align: middle;
    font-size:20px;
    }


    .main-menu:hover,nav.main-menu.expanded {
    width:250px;
    overflow:visible;
    }

    .main-menu {
    background:#212121;
    border-right:1px solid #e5e5e5;
    position:absolute;
    top:0;
    bottom:0;
    height:100%;
    left:0;
    width:60px;
    overflow:hidden;
    -webkit-transition:width .05s linear;
    transition:width .05s linear;
    -webkit-transform:translateZ(0) scale(1,1);
    z-index:1000;
    }

    .main-menu>ul {
    margin:7px 0;
    }

    .main-menu li {
    position:relative;
    display:block;
    width:250px;
    }

    .main-menu li>a {
    position:relative;
    display:table;
    border-collapse:collapse;
    border-spacing:0;
    color:#999;
     font-family: arial;
    font-size: 14px;
    text-decoration:none;
    -webkit-transform:translateZ(0) scale(1,1);
    -webkit-transition:all .1s linear;
    transition:all .1s linear;
      
    }

    .main-menu .nav-icon {
    position:relative;
    display:table-cell;
    width:60px;
    height:36px;
    text-align:center;
    vertical-align:middle;
    font-size:18px;
    }

    .main-menu .nav-text {
    position:relative;
    display:table-cell;
    vertical-align:middle;
    width:190px;
      font-family: 'Titillium Web', sans-serif;
    }

    .main-menu>ul.logout {
    position:absolute;
    left:0;
    bottom:0;
    }

    .no-touch .scrollable.hover {
    overflow-y:hidden;
    }

    .no-touch .scrollable.hover:hover {
    overflow-y:auto;
    overflow:visible;
    }

    a:hover,a:focus {
    text-decoration:none;
    }

    nav {
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    -o-user-select:none;
    user-select:none;
    }

    nav ul,nav li {
    outline:0;
    margin:0;
    padding:0;
    }
    .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
    color:#fff;
    background-color:#5fa2db;
    }
    .area {
    float: left;
    background: #e2e2e2;
    width: 0%;
    height: 50%;
    }
    @font-face {
      font-family: 'Titillium Web';
      font-style: normal;
      font-weight: 300;
      src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }
    marquee {
      -webkit-animation:  caption 50s linear 0s infinite;
      font-family:'Segoe ui';
      padding:20px 0;
      overflow: hidden;
      overflow-x:-webkit-marquee;
      color: red;
    }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="http://justinfarrow.com" target="_blank">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Your Bank
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-user fa-2x"></i>
                        <span class="nav-text">
                            Account
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Investment Details
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-rupee fa-2x"></i>
                        <span class="nav-text">
                            Save Money
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle fa-2x"></i>
                        <span class="nav-text">
                            Help
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cog fa-2x"></i>
                        <span class="nav-text">
                           Settings
                        </span>
                    </a>
                </li>
              
        </nav>
        <br>
        <div>
          <marquee direction="right" speed="normal" behavior="loop" >
               Your Bank 
          </marquee>
          
  </body>

@endsection
