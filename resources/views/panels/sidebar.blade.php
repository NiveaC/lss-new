<aside
  class="{{$configData['sidenavMain']}} @if(!empty($configData['activeMenuType'])) {{$configData['activeMenuType']}} @else {{$configData['activeMenuTypeClass']}}@endif @if(($configData['isMenuDark']) === true) {{'sidenav-dark'}} @elseif(($configData['isMenuDark']) === false){{'sidenav-light'}}  @else {{$configData['sidenavMainColor']}}@endif">
  <!-- logo brand-->
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo" href="{{asset('/')}}">
        @if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
          @if($configData['mainLayoutType']=== 'vertical-modern-menu')
          <img class="hide-on-med-and-down" src="{{asset('images/lss-logo/logo_wh.png')}}" alt="Live Show Seller logo" style="height:13pt;width:30pt;"/>
          <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset('images/lss-logo/logo.png')}}"
            alt="Live Show Seller logo" />

          @elseif($configData['mainLayoutType']=== 'vertical-menu-nav-dark')
          <img src="{{asset($configData['smallScreenLogo'])}}" alt="Live Show Seller logo" />

          @elseif($configData['mainLayoutType']=== 'vertical-gradient-menu')
          <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset($configData['largeScreenLogo'])}}"
            alt="materialize logo" />
          <img class="hide-on-med-and-down" src="{{asset($configData['smallScreenLogo'])}}" alt="materialize logo" />

          @elseif($configData['mainLayoutType']=== 'vertical-dark-menu')
          <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset($configData['largeScreenLogo'])}}"
            alt="materialize logo" />
          <img class="hide-on-med-and-down" src="{{asset($configData['smallScreenLogo'])}}" alt="materialize logo" />
          @endif
        @endif
        <span class="logo-text hide-on-med-and-down white-text" style="font-size:12pt; font-weight:bold;">
          @if(!empty ($configData['templateTitle']) && isset($configData['templateTitle']))
          {{$configData['templateTitle']}}
          @else
          Live Show Seller
          @endif
        </span>
      </a>
      <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons white-text">menu</i></a></h1>
  </div>
  <!-- 下面頁面選單 -->
  <ul class="lss_blue sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow sidebar_content" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    <li class="navigation-header sidebar_content">
      <div class="row sidebar_content">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/dashboard_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Dashboard</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/inventory_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Inventories</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/campaign_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Campaign</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/auto reply_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Auto Reply</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
    <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/payment_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Payment</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/regional_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Regional</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/settings_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Settings</a>
        </div>
      </div>
    </li>
    <li class="navigation-header">
      <div class="row">
        <div class="col s2 left p-0">
          <img class="" src="{{asset('images/lss-icon/platform_wh.png')}}" style="height:14pt;"/>
        </div>
        <div class="col s10">
          <a href="#" class="navigation-header-text" style="font-size:14px; color:#c0d7e8;">Platform</a>
        </div>
      </div>
    </li>
  </ul>
  <div class="navigation-background"></div>
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect lss_blue hide-on-large-only"
    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>