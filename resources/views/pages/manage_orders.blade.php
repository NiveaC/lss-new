{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Manage Comments')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users list start -->
<section class="users-list-wrapper section" style="padding: 0 2rem;">
  <div class="row">
    <div class="col s12 m12 l12 pr-0 mb-2 center-align">
      <span class="title" style="font-size:24pt; color:#ffffff;">211024 Customer Orders</span>
    </div>
  </div>
  <div class="row" id="orders_status gradient-Analytics">
    <div class="col s12 m6 l6 card-width" style="padding: 0 2rem;">
      <div class="card row gradient-45deg-deep-orange-orange gradient-shadow white-text padding-4 mt-5">
        <div class="col s7 m7">
          <i class="material-icons background-round mt-5 mb-5">published_with_changes</i>
        </div>
        <div class="col s5 m5 right-align">
          <h5 class="mt-5 white-text">690</h5>
          <h6 class="mb-0 white-text">Proceed</h6>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l6 card-width" style="padding: 0 2rem;">
      <div class="card row gradient-45deg-green-teal gradient-shadow white-text padding-4 mt-5">
        <div class="col s7 m7">
          <i class="material-icons background-round mt-5 mb-5">add_shopping_cart</i>
        </div>
        <div class="col s5 m5 right-align">
          <h5 class="mt-5 white-text">1885</h5>
          <h6 class="mb-0 white-text">In Cart</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table customer_orders">
          <div class="col s12 mt-0">
            <a class="btn indigo darken-4 mb-1 waves-effect waves-light mr-1">
              <i class="material-icons left mr-0">refresh</i>Refresh Orders</a>
            <a class="btn indigo darken-4 mb-1 waves-effect waves-light">
              <i class="material-icons left mr-0">not_interested</i>Stop Checkout</a>
          </div>
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>Order NO.</th>
                <th>FB Image</th>
                <th>FB Name</th>
                <th>Total Item</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Action</th>
                <th>view</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>300</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a></td>
                <td>Dean Stanley</td>
                <td>12</td>
                <td>127.5</td>
                <td>General Payment</td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>301</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Zena Buckley</td>
                <td>12</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>302</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Delilah Moon</td>
                <td>03/01/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
               <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
               <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>303</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Hillary Rasmussen</td>
                <td>18/07/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>304</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Herman Tate</td>
                <td>20/03/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>305</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Kuame Ford</td>
                <td>30/08/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>306</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Fulton Stafford</td>
                <td>20/09/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>307</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Piper Jordan</td>
                <td>05/08/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>308</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Neil Sosa</td>
                <td>10/02/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>309</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Caldwell Chapman</td>
                <td>24/02/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>310</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Wesley Oneil</td>
                <td>05/08/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>311</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Tallulah Fleming</td>
                <td>20/09/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>312</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Iris Maddox</td>
                <td>25/05/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>313</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Caleb Bradley</td>
                <td>15/04/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>314</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Illiana Grimes</td>
                <td>04/10/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>315</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Chester Estes</td>
                <td>09/02/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>316</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Gregory Hayden</td>
                <td>23/09/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Cart</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>317</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Jescie Parker</td>
                <td>18/02/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>318</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Sydney Cabrera</td>
                <td>31/01/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>319</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Gray Valenzuela</td>
                <td>27/02/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip orange lighten-5"><span class="orange-text">Close</span></span></td>
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">edit</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>320</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Hoyt Ellison</td>
                <td>03/05/2020</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>321</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Damon Berry</td>
                <td>02/09/2019</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>322</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Kelsie Dunlap</td>
                <td>05/11/2019</td>
                <td>Yes</td>
                <td>User </td>
                <td><span class="chip orange lighten-5"><span class="orange-text">Proceed</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>
              <tr>
                <td></td>
                <td>323</td>
                <td><img class="user_img circle" src="{{asset('images/user/12.jpg')}}" alt=""></a>
                </td>
                <td>Abel Dunn</td>
                <td>16/06/2020</td>
                <td>No</td>
                <td>Staff</td>
                <td><span class="chip red lighten-5"><span class="red-text">Banned</span></span></td>
                <!-- <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">chat_bubble_outline</i></a></td> -->
                <td><a href="{{asset('page-users-edit')}}"><i class="material-icons">shopping_cart</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>

            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
<!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection