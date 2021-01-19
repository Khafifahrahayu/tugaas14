@extends ('template.base')

@section('content')
	<h3><p align=center><b>Ini Halaman Kategori</b></p></h3>
        <div class="row align-items-stretch">
          <div class="col-lg-4">
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

	<p></p>
@endsection
