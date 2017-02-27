@section('slider')
    <!--slider-->

    <div class="toko-slider">
        <div class="">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="img/bannerpromo2.png" alt="..." style="height:310px;width:100%;" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="img/bannerpromo3.png" alt="..." style="height:310px;width:100%;">
                    </div>
                    <div class="item">
                        <img src="img/bannerpromo4.png" alt="..." style="height:310px;width:100%;">
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--comtainer-->
    </div>
    <!--sally slider-->
    <!--Slider ends-->
@endsection
