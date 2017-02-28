@section('header')
@include('auth.login')
<!--Navigation starts-->
<div class=" ">
   <nav class="topnav">
       <div class="container">
           <span>Contact Us | Help </span>
<!--           <span style="float:right"><a href="#">Sign In</a> / <a href="#">Register</a></span>-->
            <span style="float:right"><a href="#" data-toggle="modal" data-target="#myModal">Sign In / Register</a></span>
       </div>
   </nav>
   <nav class="toko-navbar navbar navbar-default">
       <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navlist" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><i class="fa fa-home" style="font-size:35pt" aria-hidden="true"></i> <b>Snack</b>House</a>
           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <form class="form-inline form-group-sm">
                   <input type="text" class="search form-control" placeholder="Search Here...">
                   <button type="submit" class="toko-form-btn btn">Search</button>
                   <a href="#" class="toko-btn-cart btn "><span class="fa fa-shopping-cart"></span></a>
               </form>
           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container-->
   </nav>
   <!--Navigation ends-->
   <nav class="bottomnav ">
       <div class="container">
           <div class="collapse navbar-collapse" id="navlist">
               <ul class="nav navbar-nav">

                   <!--<li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category List <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="#">Chips</a></li>
                           <li><a href="#">Candies</a></li>
                       </ul>
                   </li>-->
                   <li><a href="#">Snack Corner</a></li>
                   <li><a href="#">Coming Soon</a></li>
               </ul>
           </div>

       </div>
   </nav>
</div>


@endsection
