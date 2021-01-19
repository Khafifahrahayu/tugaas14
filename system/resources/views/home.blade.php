 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>TOKOPAKEDI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{url('public')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('public')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{url('public')}}/css/aos.css">

    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="home" class="js-logo-clone">TOKOPAKEDI</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href=>Home</a>
                  <ul class="dropdown">
                    
                    <li class="has-children">
                      
                      <ul class="dropdown">
                        
                      </ul>
                    </li>
                  </ul>
                </li>
                
                <li><a href="shop">Shop</a></li>
                <
                <li><a href="contact">Contact</a></li>
                <li><a href="login">Login</a></li>
              </ul>
            </nav>
          </div>
           <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="{{url('public')}}/images/model_3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
              <a href="#" class="product-category">Women <span>25 items</span></a>
              <img src="{{url('public')}}/images/model_4.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="#" class="product-category">Men <span>25 items</span></a>
              <img src="{{url('public')}}/images/model_5.png" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
              <a href="#" class="product-category">Shoes <span>25 items</span></a>
              <img src="{{url('public')}}/images/model_6.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        <div class="row">


          @foreach ($list_produk as $produk)
       
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{url('public')}}/images/sandal.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">{{$produk->nama}}</a></h2>
            <strong class="item-price">RP. {{number_format($produk->harga)}}</strong>
          </div> 


         @endforeach
         <div class="row">
          <div class="col-md-12">
            <div class="float-bottom">
            <div class="d-flex justify-content-center">
              {!! $list_produk->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
            Alamat
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="control-label">Provinsi</label>
                <select name="" class="form-control" oncuechange="gantiProvinsi(this.value)">
                  <option value="">Pilih Provinsi</option>
                  @foreach($list_provinsi as $provinsi)
                  <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Kabupaten/Kota</label>
                <select name="" class="form-control" id="kabupaten" onchange="(gantiKabupaten(this.value)">
                  <option value="">Pilih Kabupaten</option>
                  <option value="">KETAPANG</option>

                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Kecamatan</label>
                <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                  <option value="">Pilih Kecamatan</option>
                  <option value="">MATAN HILIR SELATAN</option>

                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Desa</label>
                <select name="" class="form-control" id="desa">
                  <option value="">Pilih Desa</option>
                  <option value="">PESAGUAN KIRI</option>
                  <option value=""></option>

                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>                  

@push('script') 
  <script>

    contoh = {
      "id": 6101,
      "id_provinsi": "61",
      "name": "KABUPATEN SAMBAS"
    },

    function gantiProvinsi(id){
      $.get("api/provinsi/"+id, function(result){
        result = Json.parse(result)
        option = ""
        for(item of result){
          option += `<option value="${item.id}">${item.name}</option>`
        }
        $("#kabupaten").html(option)
      });
    }

    function gantiKabupaten(id){

      $.get("api/kabupaten/"+id, function(result){
        result = Json.parse(result)
        option = ""
        for(item of result){
          option += `<option value="${item.id}">${item.name}</option>`
        }
        $("#kecamatan").html(option)
      });
    }

      function gantiKecamatan(id){

      $.get("api/kecamatan/"+id, function(result){
        result = Json.parse(result)
        option = ""
        for(item of result){
          option += `<option value="${item.id}">${item.name}</option>`
        }
        $("#desa").html(option)
      });
    }

  </script>
@endpush

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{url('public')}}/images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                  <strong class="item-price"><del>RP.460.000</del> RP.280.000</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{url('public')}}/images/prod_3.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                  <strong class="item-price"><del>RP.460.000</del> RP.280.000</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{url('public')}}/images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                  <strong class="item-price"><del>RP.460.000</del> RP.280.000</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{url('public')}}/images/prod_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                  <strong class="item-price"><del>RP.460.000</del> RP.280.000</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{url('public')}}//images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                  <strong class="item-price">$58.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
            
    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Shoes</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="{{url('public')}}/images/model_6.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="{{url('public')}}/images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  Desember 15 &mdash; 25, 2020</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
         <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Jl.Brigjend Katamso Sukaharja kecamatan delta pawan Kalimantan Barat</li>
                <li class="phone"><a href="tel://0896-9443-4122">0896-9443-4122</a></li>
                <li class="email">khafifahrahayu90@gmail.com</li>
              </ul>
            </div>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
             <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.instagram.com/lisaapr_30/?hl=id" target="_blank" class="text-primary">Khafifah Rahayu</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{url('public')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{url('public')}}/js/jquery-ui.js"></script>
  <script src="{{url('public')}}/js/popper.min.js"></script>
  <script src="{{url('public')}}/js/bootstrap.min.js"></script>
  <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{url('public')}}/js/aos.js"></script>

  <script src="{{url('public')}}/js/main.js"></script>
    
  </body>
</html>