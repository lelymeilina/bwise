<!DOCTYPE html>
<html>
  <head>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- png -->
    <link rel="apple-touch-icon" href="{{ asset('assets/theme/pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/theme/pages/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/theme/pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/theme/pages/ico/152.png') }}">

    <!-- pavicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/theme/favicon.ico') }}" />

    <!-- css -->
    {{ Html::style('assets/theme/assets/plugins/pace/pace-theme-flash.css') }}
    {{ Html::style('assets/theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('assets/theme/assets/plugins/font-awesome/css/font-awesome.css') }}
    {{ Html::style('assets/theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}
    {{ Html::style('assets/theme/assets/plugins/select2/css/select2.min.css') }}
    {{ Html::style('assets/theme/assets/plugins/switchery/css/switchery.min.css') }}
    {{ Html::style('assets/theme/pages/css/pages-icons.css') }}
    {{ Html::style('assets/theme/pages/css/themes/light.css') }}
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        {{ Html::image('assets/theme/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg', '', ['alt'=>'logo', 'data-src'=>'assets/theme/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg', 'data-src-retina'=>'assets/theme/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg', 'class'=>'lazy']) }}

        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
          Pages make it easy to enjoy what matters the most in the life</h2>
          <p class="small">
            images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2013-2014 REVOX.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          {{ Html::image('assets/theme/assets/img/logo.png', 'logo', ['alt'=>'logo', 'data-src'=>'assets/theme/assets/img/logo.png', 'data-src-retina'=>'assets/theme/assets/img/logo_2x.png', 'width'=>'78', 'height'=>'22']) }}
          <p class="p-t-35">Sign into your pages account</p>


          <!-- START Login Form -->
          <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group form-group-default">
              <label for="email">{{ __('E-Mail Address') }}</label>
              <div class="controls">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>                
              </div>
              @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>            
            <div class="form-group form-group-default">
              <label for="password">{{ __('Password') }}</label>
              <div class="controls">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>                
              </div>
              @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="row">
              <div class="col-md-6 no-padding sm-p-l-10">
                <div class="checkbox ">
                  <input type="checkbox" id="checkbox1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="checkbox1">Keep Me Signed in</label>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a class="text-info small" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-cons m-t-10">
              <span class="pull-left"><i class="fa fa-unlock"></i></span>
              <span class="bold">{{ __('Login') }}</span>            
            </button>            
          </form><br />
          <!--END Login Form-->


          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">              
              <div class="col-sm-9 no-padding m-t-10">
                <p>
                  <small>
                  Create a pages account. If you have a facebook account, log into it for this
                  process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          {{ Html::image('assets/theme/assets/img/logo.png', 'logo', ['alt'=>'logo', 'data-src'=>'assets/theme/assets/img/logo.png', 'data-src-retina'=>'assets/theme/assets/img/logo_2x.png', 'width'=>'78', 'height'=>'22', 'class'=>'overlay-brand']) }}
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      {{ Html::image('assets/theme/assets/img/profiles/avatar.jpg', '', ['alt'=>'', 'data-src'=>'assets/theme/assets/img/profiles/avatar.jpg', 'data-src-retina'=>'assets/theme/assets/img/profiles/avatar2x.jpg', 'width'=>'50', 'height'=>'50']) }}
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    {{ Html::script('assets/theme/assets/plugins/pace/pace.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery/jquery-1.11.1.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/modernizr.custom.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-ui/jquery-ui.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/tether/js/tether.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/bootstrap/js/bootstrap.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery/jquery-easy.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-actual/jquery.actual.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/select2/js/select2.full.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/classie/classie.js') }}
    {{ Html::script('assets/theme/assets/plugins/switchery/js/switchery.min.js') }}
    {{ Html::script('assets/theme/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}
    <!-- END VENDOR JS -->
    {{ Html::script('assets/theme/pages/js/pages.min.js') }}
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>