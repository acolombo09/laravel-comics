<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];
    

  return view('home', $data);
});

Route::get('comics', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('comics', $data);
});

Route::get('movies', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('movies', $data);
});

Route::get('tv', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('tv', $data);
});

Route::get('games', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('games', $data);
});

Route::get('collectibles', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('collectibles', $data);
});

Route::get('videos', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('videos', $data);
});

Route::get('fans', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('fans', $data);
});

Route::get('news', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('news', $data);
});

Route::get('shop', function () {

  $data = [
    'headerLinks' => [
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
    ],
    'dcComicsLinks' => [
      'Characters',
      'Comics',
      'Movies',
      'Tv',
      'Games',
      'Videos',
      'News',
    ],
    
    'shopLinks' => [
      'Shop Dc',
      'Shop Collectibles',
    ],
    
    'dcLinks' => [
      'Terms Of Use',
      'Privacy Policy(New)',
      'AdChoice',
      'Advertising',
      'Jobs',
      'Subscriptions',
      'Talent Workshops',
      'CPSC Certificates',
      'Ratings',
      'Shop Help',
      'Contact Us',
    ],

    'sitesLinks' => [
      'DC',
      'Mad Magazine',
      'DC Kids',
      'DC Universe',
      'DC Power Visa',
    ]
    ];

  return view('shop', $data);
});
?>
