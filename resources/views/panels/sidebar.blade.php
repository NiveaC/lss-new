<aside
  class="{{$configData['sidenavMain']}} @if(!empty($configData['activeMenuType'])) {{$configData['activeMenuType']}} @else {{$configData['activeMenuTypeClass']}}@endif @if(($configData['isMenuDark']) === true) {{'sidenav-dark'}} @elseif(($configData['isMenuDark']) === false){{'sidenav-light'}}  @else {{$configData['sidenavMainColor']}}@endif">
  <!-- logo brand-->
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="{{asset('/')}}">
        @if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
          @if($configData['mainLayoutType']=== 'vertical-modern-menu')
          <img class="hide-on-med-and-down" src="{{asset('images/lss-logo/logo.png')}}" alt="Live Show Seller logo" style="height:13pt;width:30pt;"/>
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
        <span class="logo-text hide-on-med-and-down" style="font-size:12pt; font-weight:bold;">
          @if(!empty ($configData['templateTitle']) && isset($configData['templateTitle']))
          {{$configData['templateTitle']}}
          @else
          Live Show Seller
          @endif
        </span>
      </a>
      <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons">menu</i></a></h1>
  </div>
  <!-- 下面頁面選單 -->
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    
    <li class="navigation-header">
      <!-- <a><img src="{{asset('images/lss-icon/dashboard1.png')}}" class="responsive-img" style="width:12px; height:12px; margin-bottom: -0.5rem;" alt="Guideline"><span class="right-align white-text mb-3">Dashboard</span>Dashboard</a> -->
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/dashboard1.png')}}" style="height:12pt; width:12pt; margin-right:18px; margin-bottom: -0.5rem;">Dashboard</a>
    </li>
    <li class="navigation-header">
  <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/inventory.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Inventories</a> 
    </li>
    <li class="navigation-header">
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/live.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Campaign</a>
    </li>
    <li class="navigation-header">
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/auto reply.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Auto Reply</a>
    </li>
    <li class="navigation-header">
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/payment.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Payment</a>
    </li>
    <li class="navigation-header">
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/regional.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Regional</a>
    </li>
    <li class="navigation-header">
      <a href="#" class="navigation-header-text" style="font-size:14px;"><img class="" src="{{asset('images/lss-icon/settings.png')}}" style="height:14pt; width:14pt; margin-right:18px;"/>Settings</a>
    </li>
  </ul>
    
  <!-- <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    {{-- Foreach menu item starts --}}
    @if(!empty($menuData[0]) && isset($menuData[0]))
      @foreach ($menuData[0]->menu as $menu)
        @if(isset($menu->navheader))
        <li class="navigation-header">
          <a class="navigation-header-text">{{ $menu->navheader }}</a>
          <i class="navigation-header-icon material-icons">{{$menu->icon }}</i>
        </li>
        @else
        @php
          $custom_classes="";
          if(isset($menu->class))
          {
          $custom_classes = $menu->class;
          }
        @endphp
      <li class="bold {{(request()->is($menu->url.'*')) ? 'active' : '' }}">
        <a class="{{$custom_classes}} {{ (request()->is($menu->url.'*')) ? 'active '.$configData['activeMenuColor'] : ''}}"
          @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
          href="@if(($menu->url)==='javascript:void(0)'){{$menu->url}} @else{{url($menu->url)}} @endif"
          {{isset($menu->newTab) ? 'target="_blank"':''}}>
          <i class="material-icons">{{$menu->icon}}</i>
          <span class="menu-title">{{ __('locale.'.$menu->name)}}</span>
          @if(isset($menu->tag))
          <span class="{{$menu->tagcustom}}">{{$menu->tag}}</span>
          @endif
        </a>
          @if(isset($menu->submenu))
          @include('panels.submenu', ['menu' => $menu->submenu])
          @endif
        </li>
        @endif
      @endforeach
    @endif
  </ul> -->
  <div class="navigation-background"></div>
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>