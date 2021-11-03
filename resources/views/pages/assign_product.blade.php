{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Assign Products to Campaign 211018')

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
<div id="assign_info" class="row">
  <div class="col s12">
    <div class="card card-tabs">
      <div class="card-content assign_content">
        <div id="view-select2">
          <div class="row"> 
            <div class="col s12">
              <div class="row">
                <div class="col s12 m2 l2 input-field" >
                  <select class="p-0">
                    <option>Cheese Cake</option>
                    <option>Apple Pie</option>
                    <option>Apple Pie</option>
                    <option>Apple Pie</option>
                    <option>Apple Pie</option>
                  </select>
                  <label >Name</label>
                </div>
                <div class="col s12 m2 l2 input-field">
                  <input id="username" name="username" type="text" class="validate" value="CK"
                    data-error=".errorTxt3">
                  <label for="order code">Order Code</label>
                  <small class="errorTxt3"></small>
                </div>
                <div class="col s6 m2 l2 input-field">
                  <input id="name" name="campaign qty" type="text" class="validate" value="300"
                    data-error=".errorTxt3">
                  <label for="campaign qty">Campaign Q'ty</label>
                  <small class="errorTxt3"></small>
                </div>
                <div class="col s6 m2 l2 input-field">
                  <input id="email" name="max order qty" type="text" class="validate" value="3"
                    data-error=".errorTxt3">
                  <label for="max order qty">Max Order Q'ty</label>
                  <small class="errorTxt3"></small>
                </div>
                <div class="col s6 m2 l2">
                  <label for="max order qty">Allow Customer</label>
                  <p>
                  <div class="" style="margin-top:0.5vh;">
                    <label>
                      <input class="validate" required id="tnc_select1" type="checkbox" />
                      <span>Edit Item</span>
                    </label>
                  </div>
                  </p>
                </div>
                <div class="col s6 m2 l2 right-align" style="margin-top:3.4vh;">
                  <label for="max order qty"></label>
                  <p>
                  <label>
                    <input class="validate" required id="tnc_select1" type="checkbox" />
                    <span>Delete Item</span>
                  </label>
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m12 assign_btn">
              <a class="waves-effect waves-light btn right">Assign</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- assign product -->
<div class="section section-data-tables assign_product">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content assign_product">
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display" style="background-color:none; width:100%;display:block; overflow-x:auto;white-space:nowrap;" >
              <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Order Code</th>
                    <th>Type</th>
                    <th>Campaign Q'ty</th>
                    <th>Max Order Q'ty</th>
                    <th>Price</th>
                    <th>Edit Item</th>
                    <th>Delete Item</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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
                    <td>v</td>
                    <td>v</td>
                    <td>
                      <span class="material-icons mr-10" style="color:#b6b6b6;">border_color</span>
                    </td>
                    <td>
                      <span class="material-icons" style="color:#b6b6b6;">delete</span>
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