@extends(Config::get('serverreqcheck::masterview'))

@section('pagestyles')
    <link href='//fonts.googleapis.com/css?family=Merriweather:300italic,300|Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/packages/ognjenm/serverreqcheck/css/main.css">
    <link rel="stylesheet" type="text/css" href="/packages/ognjenm/serverreqcheck/css/themes.css">
    <link rel="stylesheet" type="text/css" href="/packages/ognjenm/serverreqcheck/css/animate.css">

    <!-- Angular Libs -->
    <script src="/packages/ognjenm/serverreqcheck/js/angular.min.js" type="text/javascript"></script>
    <script src="/packages/ognjenm/serverreqcheck/js/angular-route.js" type="text/javascript"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@stop

@section('content')
<div ng-app="linuxDash" id="linuxdash" class="old">
<div class="hero">
    <h4 class="title">System info dashboard</h4>
    <theme-switcher></theme-switcher>
    <nav-bar></nav-bar>
</div>
<div
    id="plugins"
    class="animated fadeInDown"
    ng-view>
</div>

<!-- Javascript-->
<!-- Placed at the end of the document so the pages load faster -->
</div>
@stop

@section('page_level_scripts')
    <script src="/packages/ognjenm/serverreqcheck/js/linuxDash.js" type="text/javascript"></script>
    <script src="/packages/ognjenm/serverreqcheck/js/modules.js" type="text/javascript"></script>
    <script src="/packages/ognjenm/serverreqcheck/js/smoothie.min.js" type="text/javascript"></script>

@stop
