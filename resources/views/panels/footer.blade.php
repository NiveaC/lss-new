<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright center">
    <div class="container">
      <span>&copy; 2021 <a href=""
          target="_blank">Live Show Seller</a> All rights reserved.
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->