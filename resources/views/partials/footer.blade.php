<footer>
  <div class="container-fluid px-0 footer-upper">
    <div class="row mx-0">
      <div class="col-md-9 d-flex justify-content-start align-items-center py-4 mx-auto overflow-hidden position-relative">
        <div class="col-md-4 d-flex justify-content-between px-0">
          <div class="row mx-0">
            <div class="col-4 px-0">
              <h6 class="title">DC COMICS</h6>
              <ul class="list-unstyled">
                @foreach ($dcComicsLinks as $dcLink)
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ $dcLink }}
                  </a>
                </li>
                @endforeach
                {{-- <li v-for="link in DcComicsLinks"><a href="#">{{ link.name }}</a></li> --}}
              </ul>
              <h6 class="title">SHOP</h6>
              <ul class="list-unstyled">
                {{-- <li v-for="link in ShopLinks"><a href="#">{{ link.name }}</a></li> --}}
              </ul>
            </div>
            <div class="col-4 px-0">
              <h6 class="title">DC</h6>
              <ul class="list-unstyled">
                {{-- <li v-for="link in DCLinks"><a href="#">{{ link.name }}</a></li> --}}
              </ul>
            </div>
            <div class="col-4 px-0">
              <h6 class="title">SITES</h6>
              <ul class="list-unstyled">
                {{-- <li v-for="link in SitesLinks"><a href="#">{{ link.name }}</a></li> --}}
              </ul>
            </div>
          </div> 
        </div>
        <div class="col-md-8 div-logo">
          <img src="/images/dc-logo-bg.png" class="logo-img" alt="logo-dc-bg">
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid px-0 footer-lower">
    <div class="row">
      <div class="col-md-9 d-flex justify-content-between align-items-center py-4 mx-auto">
        <div class="col-md-4 d-flex align-items-center justify-content-start">
          <button type="button" class="btn btn-lg btn-outline-primary border-2 rounded-0 text-white">SIGN-UP NOW!</button>
        </div>
        <ul class="nav col-md-4 d-flex justify-content-end align-items-center list-unstyled">
          <li class="ms-3"><h3 class="text-primary fs-4 fw-bold" href="#">FOLLOW US</h3></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-facebook.png" alt="fb-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-twitter.png" alt="twitt-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-youtube.png" alt="yt-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-pinterest.png" alt="pint-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-periscope.png" alt="locator-footer"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<style>

a {
  text-decoration: none;
  color: $color-tertiary;
}

.footer-upper{
  background-image: url(../assets/img/footer-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  .div-logo{
    min-height: 400px;
    overflow: hidden;
  }
  .logo-img{
    height: 120%;
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
  }
}

.footer-lower{
  background-color: $color-secondary;
}

.title {
  color: white;
}

</style>