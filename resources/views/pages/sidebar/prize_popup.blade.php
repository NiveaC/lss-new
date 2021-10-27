{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/lss.css')}}">
@endsection

<!-- START RIGHT SIDEBAR NAV -->
<aside id="prize_popup_right">
  <div id="prize_popup" class="prize_popup sidenav rightside-navigation">
    <div class="row">
      <div class="slide-out-right-title">
        <div class="col s12 border-bottom-1 pb-0 pt-1">
          <div class="row">
            <div class="col s2 pr-0 pt-1 center">
              <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
            </div>
            <div class="col s10 pl-2 mb-1 pt-0">
              <h6 class="prize_title" style="width:300px;">Lucky Draw Details</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row slide-out-right-body pl-3">
        <div id="draw_details" class="col s12 pb-0">
          <div class="collection border-none mb-0 draw_details_font">
            <div class="prize">
              <span class="ml-7">Prize</span>
              <select name="prize_option" id="prize_option" class="browser-default ml-7" style="width: 260px;">
                <option value="Cup Cake">Cup Cake</option>
                <option value="Cup Cake">Cup Cake2</option>
                <option value="Cup Cake">Cup Cake3</option>
                <option value="Cup Cake">Cup Cake4</option>
                <option value="Cup Cake">Cup Cake5</option>
                <option value="Cup Cake">Cup Cake6</option>
              </select>
            </div>
            <div class="order_code mt-4">
              <label>
                <input type="checkbox" value="order code"/>
                <span>Order Code</span>
                <select name="prize_option" id="prize_option" class="browser-default ml-7" style="width: 260px;">
                  <option value="Cheese Cake">Cheese Cake</option>
                  <option value="Cheese Cake">Cheese Cake1</option>
                  <option value="Cheese Cake">Cheese Cake1</option>
                  <option value="Cheese Cake">Cheese Cake1</option>
                  <option value="Cheese Cake">Cheese Cake1</option>
                  <option value="Cheese Cake">Cheese Cake1</option>
                </select>
              </label>
            </div>
            <div class="comments_including mt-4">
              <label>
                <input type="checkbox" value="comments including" />
                <span>Comments Including</span>
                <select name="prize_option" id="prize_option" class="browser-default ml-7" style="width: 260px;">
                  <option value="Good">Good</option>
                  <option value="Good">Good2</option>
                  <option value="Good">Good3</option>
                  <option value="Good">Good4</option>
                  <option value="Good">Good5</option>
                  <option value="Good">Good6</option>
                </select>
              </label>
            </div>
            <div class="winner mt-4">
              <span class="ml-7">Number of Winner</span>
              <select name="prize_option" id="prize_option" class="browser-default ml-7" style="width: 260px;">
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="spin_time mt-4">
              <span class="ml-7">Spin Time</span>
              <select name="prize_option" id="prize_option" class="browser-default ml-7" style="width: 260px;">
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
              </select>
            </div>
            <div class="col s12 mt-5 mb-3 ">
              <a class="waves-effect waves-light btn mb-1 mr-1 border-round right">Save</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide Out Chat -->
  <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
      <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
    </li>
    <li class="chat-body">
      <ul class="collection">
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">hello!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">How can we help? We're here for you!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I am looking for the best admin template.?</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>8:20 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! very nice</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">How can I purchase it?</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>9:00 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">From ThemeForest.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Only $24</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I will purchase it for sure.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Great, Feel free to get in touch on</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">https://pixinvent.ticksy.com/</p>
          </div>
        </li>
      </ul>
    </li>
    <li class="center-align chat-footer">
      <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="search" />
          <label for="icon_prefix">Type here..</label>
          <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
        </div>
      </form>
    </li>
  </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->