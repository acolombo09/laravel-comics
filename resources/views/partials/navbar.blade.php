<header class="bg-white py-3">
  <div class="row">
    <div class="col-md-9 d-flex justify-content-center align-items-center justify-content-between mx-auto px-0">
      <img src="/images/dc-logo.png" alt="dc-logo-header">
      <ul class="nav nav-pills">
        @foreach ($headerLinks as $link)
        <li class="nav-item">
          @if ($link === 'HOME')
            <a class="nav-link" href="/">
              {{ $link }}
            </a>
          @else
            <a class="nav-link" href="/{{ strtolower($link) }}">
              {{ $link }}
            </a>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</header>

<style>

  header img {
    width: 72px;
  }
  
  header .nav-link {
    color: black;
  }
  
  li {
    position: relative;
  
  }
  
  li::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2rem;
    height: 5px;
    width: 100%;
    background-color: $color-primary;
    scale: 0 1;
    transition: scale 250ms;
  }
  
  li:hover::after{
    scale: 1 1;
  }
  
  a:hover,
  a:focus-visible {
    color: $color-primary;
  }
  
  </style>