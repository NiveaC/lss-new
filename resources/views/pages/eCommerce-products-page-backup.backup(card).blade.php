{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', 'Inventory')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/eCommerce-products-page.css')}}">
@endsection

@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss-css.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="row">
  <div class="col s12 m12 l12 pr-0">
    <div class="col s12 m7 l9 xl6 offset-xl3">
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt;">For Sale</a>
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt; background:#ffffff; border:2px solid #ff4081; color:#ff4081;">Disable</a>
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt; background:#ffffff; border:2px solid #ff4081; color:#ff4081;">Archive</a>
    </div>
    <div class="col s12 m4 offset-m1 l3 xl3">
      <a class="waves-effect indigo darken-4 btn mb-1 mr-1"><i class="material-icons left">add</i>Add Item</a>
    </div>
  </div>
</div>
<div class="section">
  <div class="row" id="ecommerce-products">

    <div class="col s12 m12 l12 pr-0">
      <div class="col s12 m6 l4 xl3">
        <div class="card animate fadeLeft">
          <div class="card-content">
            <p>Fruit Tart</p>
            <p>$24</p>
            <span class="card-title text-ellipsis">Description</span>
            <img src="{{asset('images/fruit tart.jpg')}}" class="responsive-img" style="width:350px; height:220px; margin-bottom: 30px;" alt="">
            <div class="display-flex flex-wrap justify-content-center">
              <h5 class="mt-3">Q'ty:300</h5>
              <!-- <h5 class="mt-3">Q'ty:200</h5> -->
              <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal1">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
            </div>
          </div>
        </div>
        <!-- 內容介紹 -->
        <!-- <div id="modal1" class="modal">
          <div class="modal-content pt-2">
            <div class="row" id="product-one">
              <div class="col s12">
                <a class="modal-close right"><i class="material-icons">close</i></a>
              </div>
              <div class="col m6 s12">
                <img src="{{asset('images/cards/watch-2.png')}}" class="responsive-img" alt="">
                <a class="btn-flat mb-1 waves-effect">Button</a>
              </div>
              <div class="col m6 s12">
                <p>Fruit Tart</p>
                <h5>Description</h5>
                <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                <p>Availability: <span class="green-text">36 Item Available</span></p>
                <hr class="mb-5">
                <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                <ul class="list-bullet">
                  <li class="list-item-bullet">Accept SIM card and call</li>
                  <li class="list-item-bullet">Make calling instead of mobile phone</li>
                  <li class="list-item-bullet">Sync music play and sync control music</li>
                  <li class="list-item-bullet">Sync Facebook,Twiter,emailand calendar</li>
                </ul>
                <h5>$399.00 <span class="prise-text-style ml-2">$459.00</span></h5>
                <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="col s12 m6 l4 xl3">
        <div class="card animate fadeUp">
          <div class="card-content">
            <p>Chocolate cake</p>
            <p>$24</p>
            <span class="card-title text-ellipsis">Description</span>
            <img src="{{asset('images/chocolate cake.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
            <div class="display-flex flex-wrap justify-content-center">
              <h5 class="mt-3">Q'ty:300</h5>
              <!-- <h5 class="mt-3">Q'ty:200</h5> -->
              <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal2">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
            </div>
          </div>
        </div>
        <!-- 內容介紹 -->
        <div id="modal2" class="modal">
          <div class="modal-content">
            <a class="modal-close right"><i class="material-icons">close</i></a>
            <div class="row" id="product-two">
              <div class="col m6 s12">
                <img src="{{asset('images/cards/headphone.png')}}" class="responsive-img" alt="">
              </div>
              <div class="col m6 s12">
                <p>Headphone</p>
                <h5>Purple Solo 2 Wireless</h5>
                <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                <p>Availability: <span class="red-text">Out of stock</span></p>
                <hr class="mb-5">
                <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                <ul class="list-bullet">
                  <li class="list-item-bullet">Fine-tuned acoustics for clarity</li>
                  <li class="list-item-bullet">Streamlined design for a custom-fit</li>
                  <li class="list-item-bullet">Durable and foldable so you can take them on-the-go</li>
                  <li class="list-item-bullet">ake calls and control music with RemoteTalk cable</li>
                </ul>
                <h5>$249.00 <span class="prise-text-style ml-2">$559.00</span></h5>
                <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4 xl3">
        <div class="card animate fadeUp">
          <div class="card-content">
            <p>Cheese cake</p>
            <p>$24</p>
            <span class="card-title text-ellipsis">Description</span>
            <img src="{{asset('images/cheese cake.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
            <div class="display-flex flex-wrap justify-content-center">
            <h5 class="mt-3">Q'ty:300</h5>
              <!-- <h5 class="mt-3">Q'ty:200</h5> -->
              <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal3">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
            </div>
          </div>
        </div>
        <!-- 內容介紹 -->
        <!-- <div id="modal2" class="modal">
          <div class="modal-content">
            <a class="modal-close right"><i class="material-icons">close</i></a>
            <div class="row" id="product-two">
              <div class="col m6 s12">
                <img src="{{asset('images/cards/headphone.png')}}" class="responsive-img" alt="">
              </div>
              <div class="col m6 s12">
                <p>Headphone</p>
                <h5>Purple Solo 2 Wireless</h5>
                <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                <p>Availability: <span class="red-text">Out of stock</span></p>
                <hr class="mb-5">
                <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                <ul class="list-bullet">
                  <li class="list-item-bullet">Fine-tuned acoustics for clarity</li>
                  <li class="list-item-bullet">Streamlined design for a custom-fit</li>
                  <li class="list-item-bullet">Durable and foldable so you can take them on-the-go</li>
                  <li class="list-item-bullet">ake calls and control music with RemoteTalk cable</li>
                </ul>
                <h5>$249.00 <span class="prise-text-style ml-2">$559.00</span></h5>
                <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col s12 m6 l4 xl3">
        <div class="card animate fadeRight">
          <div class="card-content">
            <p>Egg tart</p>
            <p>$24</p>
            <span class="card-title">Description</span>
            <img src="{{asset('images/egg tart.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
            <div class="display-flex flex-wrap justify-content-center">
            <h5 class="mt-3">Q'ty:300</h5>
              <!-- <h5 class="mt-3">Q'ty:200</h5> -->
              <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal4">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
            </div>
          </div>
        </div>
        <!-- 內容介紹 -->
        <!-- <div id="modal3" class="modal">
          <div class="modal-content">
            <a class="modal-close right"><i class="material-icons">close</i></a>
            <div class="row" id="product-three">
              <div class="col m6 s12">
                <img src="{{asset('images/cards/iphone-x.png')}}" class="responsive-img" alt="">
              </div>
              <div class="col m6 s12">
                <p>Smartphone</p>
                <h5>iPhone x</h5>
                <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                <p>Availability: <span class="green-text">Available</span></p>
                <hr class="mb-5">
                <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                <ul class="list-bullet">
                  <li class="list-item-bullet">Accept SIM card and call</li>
                  <li class="list-item-bullet">Take photos</li>
                  <li class="list-item-bullet">Make calling instead of mobile phone</li>
                  <li class="list-item-bullet">Sync music play and sync control music</li>
                  <li class="list-item-bullet">Sync Facebook,Twiter,emailand calendar</li>
                </ul>
                <h5>$899.00</h5>
                <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="electronic-products">
        <div class="col s12 m6 l4 xl3">
          <div class="card animate fadeLeft">
            <div class="card-content">
              <p>Banana cake</p>
              <span class="card-title text-ellipsis">Description</span>
              <img src="{{asset('images/banana cake.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
              <div class="display-flex flex-wrap justify-content-center">
              <h5 class="mt-3">Q'ty:300</h5>
                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal5">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
              </div>
            </div>
          </div>
          <!-- 內容介紹 -->
          <!-- <div id="modal4" class="modal">
            <div class="modal-content">
              <a class="modal-close right"><i class="material-icons">close</i></a>
              <div class="row" id="product-five">
                <div class="col m6 s12">
                  <img src="{{asset('images/cards/powerbank.png')}}" class="responsive-img" alt="">
                </div>
                <div class="col m6 s12">
                  <p>Powerbank</p>
                  <h5>Powerbank 11300 mAh</h5>
                  <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                  <p>Availability: <span class="green-text">Available</span></p>
                  <hr class="mb-5">
                  <span class="vertical-align-top mr-4">
                    <i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                  <ul class="list-bullet">
                    <li class="list-item-bullet">Dual output USB interfaces</li>
                    <li class="list-item-bullet">Compatible with all smartphones</li>
                    <li class="list-item-bullet">Portable design and light weight</li>
                    <li class="list-item-bullet">Battery type: Lithium-ion</li>
                  </ul>
                  <h5>$1,300.00</h5>
                  <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                  <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col s12 m6 l4 xl3">
          <div class="card animate fadeUp">
            <div class="card-content">
              <p>Carrot cake</p>
              <span class="card-title text-ellipsis">Description</span>
              <img src="{{asset('images/carrot cake.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
              <div class="display-flex flex-wrap justify-content-center">
              <h5 class="mt-3">Q'ty:300</h5>
                <!-- <h5 class="mt-3">Q'ty:200</h5> -->
                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal6">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
              </div>
            </div>
          </div>
          <!-- 內容介紹 -->
          <!-- <div id="modal5" class="modal">
            <div class="modal-content">
              <a class="modal-close right"><i class="material-icons">close</i></a>
              <div class="row" id="product-six">
                <div class="col m6 s12">
                  <img src="{{asset('images/cards/speakers.png')}}" class="responsive-img" alt="">
                </div>
                <div class="col m6 s12">
                  <p>Audio Speakers</p>
                  <h5>Wireless Audio System</h5>
                  <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                  <p>Availability: <span class="red-text">Out of stock</span></p>
                  <hr class="mb-5">
                  <span class="vertical-align-top mr-4"><i
                      class="material-icons mr-3">favorite_border</i>Wishlist</span>
                  <ul class="list-bullet">
                    <li class="list-item-bullet">360 Omnidirectional Sound</li>
                    <li class="list-item-bullet">Compatible with all smartphones</li>
                    <li class="list-item-bullet">Easy Intuitive Control</li>
                    <li class="list-item-bullet">Multiroom App</li>
                  </ul>
                  <h5>$2,299.00</h5>
                  <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                  <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col s12 m6 l4 xl3">
          <div class="card animate fadeRight">
            <div class="card-content">
              <p>Cinnamon roll</p>
              <span class="card-title text-ellipsis">Description</span>
              <img src="{{asset('images/cinnamon roll.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
              <div class="display-flex flex-wrap justify-content-center">
                <h5 class="mt-3">$59</h5>
                <!-- <h5 class="mt-3">Q'ty:200</h5> -->
                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal7">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
              </div>
            </div>
          </div>
          <!-- 內容介紹 -->
          <!-- <div id="modal6" class="modal">
            <div class="modal-content">
              <a class="modal-close right"><i class="material-icons">close</i></a>
              <div class="row" id="product-seven">
                <div class="col m6 s12">
                  <img src="{{asset('images/cards/cameras.png')}}" class="responsive-img" alt="">
                </div>
                <div class="col m6 s12">
                  <p>Cameras</p>
                  <h5>White NX Mini F1 SMART NX</h5>
                  <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                  <p>Availability: <span class="green-text">Available</span></p>
                  <hr class="mb-5">
                  <span class="vertical-align-top mr-4"><i
                      class="material-icons mr-3">favorite_border</i>Wishlist</span>
                  <ul class="list-bullet">
                    <li class="list-item-bullet">Ultra Slim & Stylish</li>
                    <li class="list-item-bullet">Perfect for Selfies</li>
                    <li class="list-item-bullet">Capture & Share on the Go</li>
                    <li class="list-item-bullet">Outstanding Optics</li>
                  </ul>
                  <h5>$559.00</h5>
                  <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                  <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col s12 m6 l4 xl3">
          <div class="card animate fadeLeft">
            <div class="card-content">
              <p>Tiramisu</p>
              <span class="card-title text-ellipsis">Description</span>
              <img src="{{asset('images/tiramisu.jpg')}}" class="responsive-img" style="width:350px; height:250px;" alt="">
              <div class="display-flex flex-wrap justify-content-center">
                <h5 class="mt-3">$25.5</h5><br>
                <!-- <p><h5 class="mt-3">Q'ty:200</h5></p> -->
                <a class="mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn btn-block z-depth-4 modal-trigger"
                href="#modal8">Edit</a>
              <a class="mt-2 waves-effect waves-light btn btn-block z-depth-4 modal-trigger" style="background:#ffffff; border:2px solid #303f9f; color:#303f9f;"
                href="">Disable</a>
              </div>
            </div>
          </div>
          <!-- 內容介紹 -->
          <!-- <div id="modal7" class="modal">
            <div class="modal-content">
              <a class="modal-close right"><i class="material-icons">close</i></a>
              <div class="row" id="product-eight">
                <div class="col m6 s12">
                  <img src="{{asset('images/cards/oneplus-6t.png')}}" class="responsive-img" alt="">
                </div>
                <div class="col m6 s12">
                  <p>Phone</p>
                  <h5>OnePlus 6T</h5>
                  <span class="new badge left ml-0 mr-2" data-badge-caption="">5 Star</span>
                  <p>Availability: <span class="green-text">Available</span></p>
                  <hr class="mb-5">
                  <span class="vertical-align-top mr-4"><i
                      class="material-icons mr-3">favorite_border</i>Wishlist</span>
                  <ul class="list-bullet">
                    <li class="list-item-bullet">Ultra Slim & Stylish</li>
                    <li class="list-item-bullet">Smoother than Stock.</li>
                    <li class="list-item-bullet">OxygenOS</li>
                    <li class="list-item-bullet">Outstanding Optics</li>
                  </ul>
                  <h5>$499.00</h5>
                  <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                  <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- Pagination -->
      <div class="col s12 center">
        <ul class="pagination">
          <li class="disabled">
            <a href="#!">
              <i class="material-icons">chevron_left</i>
            </a>
          </li>
          <li class="active"><a href="#!">1</a>
          </li>
          <li class="waves-effect"><a href="#!">2</a>
          </li>
          <li class="waves-effect"><a href="#!">3</a>
          </li>
          <li class="waves-effect"><a href="#!">4</a>
          </li>
          <li class="waves-effect"><a href="#!">5</a>
          </li>
          <li class="waves-effect">
            <a href="#!">
              <i class="material-icons">chevron_right</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/noUiSlider/nouislider.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/eCommerce-products-page.js')}}"></script>
@endsection