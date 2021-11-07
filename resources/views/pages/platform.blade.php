{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', 'Platform')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

{{-- main page content --}}
@section('content')
<div class="section">
  <div class="row">
    <div class="col s12 p-0">
      <div class="card-content">
        <div id="view-example">
          <div class="row">
            <div class="col s12">  
              <div class="row">
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="70" src="{{asset('images/lss-img/facebook.png')}}" alt="facebook" />
                      <h6 class="mb-1"><b>Facebook</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <span href="#" class="col s12">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/2.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/3.jpg')}}">
                          <img class="responsive-img circle platform_avatar" width="50" src="{{asset('images/lss-icon/two plus.png')}}">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="70" src="{{asset('images/lss-img/instagram.png')}}" alt="Instagram" />
                      <h6 class="mb-1"><b>Instagram</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <a href="#" class="col s12 p-0">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="70" src="{{asset('images/lss-img/youtube.png')}}" alt="Youtube" />
                      <h6 class="mb-1"><b>Youtube</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <span href="#" class="col s12 p-0">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/2.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/3.jpg')}}">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="60" src="{{asset('images/lss-img/tiktok.png')}}" alt="TikTok" />
                      <h6 class="mb-1"><b>TikTok</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <span href="#" class="col s12 p-0">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/2.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/3.jpg')}}">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="60" src="{{asset('images/lss-img/tiktok.png')}}" alt="TikTok" />
                      <h6 class="mb-1"><b>TikTok</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <span href="#" class="col s12 p-0">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/2.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/3.jpg')}}">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3 card-width">
                  <div class="card card-border center-align">
                    <div class="card-content">
                      <img class="responsive-img" width="60" src="{{asset('images/lss-img/tiktok.png')}}" alt="TikTok" />
                      <h6 class="mb-1"><b>TikTok</b></h6>
                      <div class="divider mt-6"></div>
                      <a class="modal-trigger mr-1" href="#modal1"><p class="col s12 indigo-text text-darken-4 mt-6 right-align p-0">View All</p></a>
                      <div class="row">
                        <span href="#" class="col s12 p-0">
                          <img class="responsive-img circle z-depth-2" width="50" src="{{asset('images/user/1.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/2.jpg')}}">
                          <img class="responsive-img circle z-depth-2 platform_avatar" width="50" src="{{asset('images/user/3.jpg')}}">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 每個平台內的粉專頁面 -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <div class="col s12">
                      <ul id="projects-collection platform_user" class="collection" style="border:1px solid white;">
                        <div class="row platform_user_header">
                          <div class="col s6" >
                            <h4 class="white-text"><b>Facebook</b></h4>
                          </div>
                          <div class="col s6 right-align">
                            <a class="btn-floating mb-1 waves-effect waves-light"><i class="material-icons">add</i></a>
                          </div>
                        </div>
                        <li id="platform_user_content" class="collection-item">
                          <div class="row">
                            <div class="col s12">
                              <img src="{{asset('images/avatar/avatar-7.png')}}" class="circle" style="width: 80px;"><div class="page_name">Mike</div>
                            </div>
                          </div>
                        </li>
                        <li id="platform_user_content" class="collection-item">
                          <div class="row">
                            <div class="col s12">
                              <img src="{{asset('images/avatar/avatar-1.png')}}" class="circle" style="width: 80px;"><div class="page_name">Mike </div>
                            </div>
                          </div>
                        </li>
                        <li id="platform_user_content" class="collection-item">
                          <div class="row">
                            <div class="col s12">
                              <img src="{{asset('images/avatar/avatar-2.png')}}" class="circle" style="width: 80px;"><div class="page_name">Mike </div>
                            </div>
                          </div>
                        </li>
                        <li id="platform_user_content" class="collection-item">
                          <div class="row">
                            <div class="col s12">
                              <img src="{{asset('images/avatar/avatar-3.png')}}" class="circle" style="width: 80px;"><div class="page_name">Mike </div>
                            </div>
                          </div>
                        </li>
                        <li id="platform_user_content" class="collection-item">
                          <div class="row">
                            <div class="col s12">
                              <img src="{{asset('images/avatar/avatar-4.png')}}" class="circle" style="width: 80px;"><div class="page_name">Mike </div>
                            </div>
                          </div>
                        </li>
                      </ul>
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
</div>

  
@endsection

{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
@endsection