<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   @yield('header')
   @yield('login')
   @yield('slider')


    <!--content-->
    <div class="toko-content">
        <div class="container">
         <!-SIDE CONTENT STARTS HERE-------------------------------->
            <div class="side-content col-md-2">
                @yield('side-content')
            </div>

         <!-MAIN CONTENT STARTS HERE-------------------------------->
            <div class="main-content col-md-10">
               @yield('main-content')
            </div>
        </div>
        <!--container-->
    </div>
    <!--content-->

    <!--comtemt emds-->

    <div class="toko-footer">
        @yield('footer')
    </div>
    <!--toko footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js "></script>
    <script type="text/javascript">
        $('#myModal').modal('hide');
        // www.jquery2dotnet.com
        $(function() {
            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
</body>

</html>
