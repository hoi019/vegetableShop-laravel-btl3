@extends('client.layouts.app')
@section('title', 'Chi tiết sản phẩm '.$product->name)
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Shop Detail</h2>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      <li class="breadcrumb-item active">Shop Detail </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End All Title Box -->

  <!-- Start Shop Detail  -->
  <div class="shop-detail-box-main">
      <div class="container">

        <form action="" method="post"></form>
          <div class="row">
              <div class="col-xl-5 col-lg-5 col-md-6">
                  <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active"> <img class="d-block w-100" style="width: 415px; height: 490px;" src="{{asset('images/'.$product->image)}}" alt="First slide"> </div>
                          <div class="carousel-item"> <img class="d-block w-100" style="width: 415px; height: 490px;" src="{{asset('images/big-img-01.jpg')}}" alt="Second slide"> </div>
                          <div class="carousel-item"> <img class="d-block w-100" style="width: 415px; height: 490px;" src="{{asset('images/big-img-02.jpg')}}" alt="Third slide"> </div>
                      </div>
                      <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span> 
             </a>
                      <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
                <i class="fa fa-angle-right" aria-hidden="true"></i> 
                <span class="sr-only">Next</span> 
             </a>
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                              <img class="d-block w-100 img-fluid" src="{{asset('images/'.$product->image)}}" alt="" />
                          </li>
                          <li data-target="#carousel-example-1" data-slide-to="1">
                              <img class="d-block w-100 img-fluid" src="{{asset('images/'.$product->image)}}" alt="" />
                          </li>
                          <li data-target="#carousel-example-1" data-slide-to="2">
                              <img class="d-block w-100 img-fluid" src="{{asset('images/'.$product->image)}}" alt="" />
                          </li>
                      </ol>
                  </div>
              </div>
              <div class="col-xl-7 col-lg-7 col-md-6">
                  <div class="single-product-details">
                      <h2>{{$product->name}}</h2>
                      <h5>{{ number_format($product->price) }} VNĐ</h5>
                      <p class="available-stock"><span> Còn 1982 sản phẩm / <a href="#">Đã bán 18 sản phẩm </a></span><p>
                <h4>Mô tả:</h4>
                <p>Thực phẩm Đu đủ (danh pháp khoa học: Carica papaya) là một cây thuộc họ Đu đủ. Đây là cây thân thảo to, không hoặc ít khi có nhánh, cao từ 3–10 m. 
                    Lá to hình chân vịt, cuống dài, đường kính 50–70 cm, có khoảng 7 khía. Hoa trắng hay xanh, đài nhỏ, vành to năm cánh </p>
                <ul>
                   <li>
                      <div class="form-group quantity-box">
                         <label class="control-label">Số lượng:</label>
                         <input class="form-control" value="1" min="0" max="20" type="number">
                      </div>
                   </li>
                </ul>

                <div class="price-box-bar">
                   <div class="cart-and-bay-btn">
                      <a class="btn hvr-hover"
                        href="#"
                      >Mua ngay</a>
                      <a class="btn hvr-hover" 
                        href="{{route('add_to_cart', $product->id)}}"
                      >Thêm vào giỏ hàng</a>
                   </div>
                </div>

                <div class="add-to-btn">
                   <div class="add-comp">
                      <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Thêm vào yêu thích</a>
                      <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Thêm vào mục so sánh</a>
                   </div>
                   <div class="share-bar">
                      <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                      <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                      <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                      <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                      <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                   </div>
                </div>
                  </div>
              </div>
          </div>

          <!-- binh luan -->
       <div class="row my-5">
          <div class="card card-outline-secondary my-4">
             <div class="card-header">
                <h2>Bình luận</h2>
             </div>

                <div class="card-body">
                    @foreach ($comments as $item)    
                        <div class="media mb-3">
                            <div class="mr-2"> 
                                <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="d-flex">
                                    <h3>{{$item->user->name}}</h3>
                                    <small class="text-muted" style="padding: 0; margin-left: 20px;">{{$item->date}}</small>
                                </div>
                                <p>{{$item->content}}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <textarea name="content" style="width: 100%; padding: 20px;" rows="4" cols="50"></textarea><br>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="d-flex" style="justify-content: flex-end; width: 100%;">
                            <button class="btn hvr-hover" style="">Đăng tải</button>
                        </div>
                    </form>
                </div>
                {{ $comments->links() }}
            </div>
       </div>

          <!-- san pham lien quan -->
          <div class="row my-5">
              <div class="col-lg-12">
                  <div class="title-all text-center">
                      <h1>Sản phẩm liên quan</h1>
                      <p>Những sản phẩm tin dùng và tốt nhất mà bạn có thể muốn xem thêm thông tin về chúng.</p>
                  </div>
                  <div class="featured-products-box owl-carousel owl-theme">

                    @foreach($relatedProducts as $item) 
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="{{asset('images/'.$item->image)}}" style="width: 265px; height: 265px;" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" 
                                            href="{{route('add_to_cart', $item->id)}}"
                                        >Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{$item->name}}</h4>
                                    <h5> {{ number_format($item->price) }} VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                  </div>
              </div>
          </div>

      </div>
  </div>
@endsection