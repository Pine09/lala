@extends('home')
@section('title', 'SnackHouse Homepage')
@include('include.header')
@include('include.slider')

@section('side-content')
         <div class="list">
             <div class="category-header list-group-item" align="center">Categories </div>
             <a href="#" class="list-group-item">Potato Chips    </a>
             <a href="#" class="list-group-item">Candy           </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
             <a href="#" class="list-group-item">Coming Soon     </a>
         </div>
@endsection

@section('main-content')
      <section class="item-section">
         <span class="section-header list-group-item" align="center">New In Stock ! </span>
            <!-ONE ITEM-->
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-info">
                       <a href="#keproductdetail">
                            <img src="img/PotatoChips.jpg" alt="snack" style="min-height:150px" class="img-responsive">
                       </a>
                    </div>
                    <hr>
                    <div class="panel-body">
                       <a href="#keproductdetail">
                            <label for="item">Potato Chip</label>
                       </a>
                       <br>
                       <label for="price">Rp 15.000</label><br>
                       <a href="#" class="card-link">
                            <button type="button" class="btn btn-success form-control"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                       </a>
                    </div>
                </div>
            </div>
            <!-END OF ONE ITEM-->
      </section>
      <nav aria-label="...">
          <ul class="pager">
              <li><a href="#">More..   .</a></li>
          </ul>
      </nav>
      <section class="item-section">
         <span class="section-header list-group-item" align="center">Popular </span>
            <!-ONE ITEM-->
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-info">
                       <a href="#keproductdetail">
                            <img src="img/PotatoChips.jpg" alt="snack" style="min-height:150px" class="img-responsive">
                       </a>
                    </div>
                    <hr>
                    <div class="panel-body">
                       <a href="#keproductdetail">
                            <label for="item">Potato Chip</label>
                       </a>
                       <br>
                       <label for="price">Rp 15.000</label><br>
                       <a href="#" class="card-link">
                            <button type="button" class="btn btn-success form-control"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                       </a>
                    </div>
                </div>
            </div>
            <!-END OF ONE ITEM-->
      </section>
      <nav aria-label="...">
          <ul class="pager">
              <li><a href="#">More...</a></li>
          </ul>
      </nav>

@endsection

@include('include.footer')
