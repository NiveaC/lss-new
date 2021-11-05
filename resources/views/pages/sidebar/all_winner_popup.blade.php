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
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

<!-- START RIGHT SIDEBAR NAV -->
<aside id="all_winner_popup_right">
  <div id="all_winner_popup" class="all_winner_popup sidenav rightside-navigation">
    <div class="row">
      <div class="slide-out-right-title">
        <div class="col s12 border-bottom-1 pb-0 pt-1">
          <div class="row">
            <div class="col s2 pr-0 pt-1 center">
              <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
            </div>
            <div class="col s10 pl-2 mb-1 pt-2">
              <h6 class="prize_title" style="width:450px;">211018 Campaign Prize Winner</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row slide-out-right-body pl-3">
      <div class="row">
    <div class="col s12">
      <div id="borderless-table" class="card card-tabs">
        <div class="card-content">
          <div id="view-borderless-table">
            <div class="row">
              <div class="col s12">
                <table>
                  <thead>
                    <tr>
                      <th data-field="id">Time</th>
                      <th data-field="name"></th>
                      <th data-field="price">Name</th>
                      <th data-field="price">Prize</th>
                      <th data-field="price">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12/10/2021</td>
                      <td><img class="responsive-img circle" src="{{asset('images/user/2.jpg')}}" width="30px"alt=""></td>
                      <td>Frank Goodman</td>
                      <td>Cup Cake</td>
                      <td></td>
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
      </div>
    </div>
  </div>
</aside>

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
<!-- END RIGHT SIDEBAR NAV -->