<?php
  $headerLinks = [
    'HOME',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP',
  ]
?>
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