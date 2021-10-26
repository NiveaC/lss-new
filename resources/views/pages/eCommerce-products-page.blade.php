{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Inventories')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="row">
  <div class="col s12 m12 l12 pr-0">
    <div class="col s12 m7 l9 xl7">
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt;">For Sale</a>
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt; background-color:#ffffff; color:#ff4081;">Disable</a>
      <a class="btn_style waves-effect waves-light btn mb-1 mr-1" style="border-radius:30pt; background-color:#ffffff; color:#ff4081;">Archive</a>
    </div>
    <div class="col s12 m4 offset-m1 l3 xl3 offset-xl2 right-align">
      <a class="btn waves-effect indigo darken-4 mb-1 mr-1"><i class="material-icons left" style="margin-right:0;">add</i>Add Item</a>
    </div>
  </div>
</div>
<div class="section section-data-tables">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
              <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Order Code</th>
                    <th>Type</th>
                    <th>Tag</th>
                    <th>Description</th>
                    <th>Q'ty</th>
                    <th>Price</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="{{asset('images/fruit tart.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Fruit Tart</td>
                    <td>#01</td>
                    <td>Product</td>
                    <td>Tart</td>
                    <td>FT</td>
                    <td>300</td>
                    <td>$32.5</td>
                    <!-- <td><a class="btn_style waves-effect waves-light btn mb-1 mr-1" style=";">Edit</a></td>
                    <td><a class="btn_style waves-effect waves-light btn mb-1 mr-1" style=";">Disable</a></td> -->
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/cheese cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>cheese cake</td>
                    <td>#02</td>
                    <td>Product</td>
                    <td>Cake</td>
                    <td>cheese</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/banana cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>banana cake</td>
                    <td>#03</td>
                    <td>Product</td>
                    <td>Cake</td>
                    <td>BC</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/Cinnamon roll.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Cinnamon roll</td>
                    <td>#04</td>
                    <td>Product</td>
                    <td>Bread</td>
                    <td>CR</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/tiramisu.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Tiramisu</td>
                    <td>#05</td>
                    <td>Product</td>
                    <td>Cake</td>
                    <td>Tiramisu</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/carrot cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Carrot Cake</td>
                    <td>#06</td>
                    <td>Lucky Draw</td>
                    <td>Cake</td>
                    <td>carrot</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/carrot cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Carrot Cake</td>
                    <td>#06</td>
                    <td>Lucky Draw</td>
                    <td>Cake</td>
                    <td>carrot</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/carrot cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Carrot Cake</td>
                    <td>#06</td>
                    <td>Lucky Draw</td>
                    <td>Cake</td>
                    <td>carrot</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                  <tr>
                    <td><img src="{{asset('images/carrot cake.jpg')}}" class="responsive-img" style="width:50px; height:35px;" alt=""></td>
                    <td>Carrot Cake</td>
                    <td>#06</td>
                    <td>Lucky Draw</td>
                    <td>Cake</td>
                    <td>carrot</td>
                    <td>300</td>
                    <td>$32.5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection