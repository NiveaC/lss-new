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
<div class="row mt-3">
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
                    <th>Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="responsive-img circle" src="{{asset('images/fruit tart.jpg')}}" width="45px"alt=""></td>
                    <td>Fruit Tart</td>
                    <td>FT</td>
                    <td>Tart</td>
                    <td>300</td>
                    <td>25.5</td>
                    <td>3</td>
                    <td>25.5</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#3949ab;">border_color</span>
                    </td>
                    <td> 
                      <span class="material-icons" style="color:#3949ab;">delete</span></span>
                    </td>
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