@extends("client.layouts.list")

@php
    
$products_card=[
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "color"=>["black","white","blue"],
    "material"=>["woold","plastic"],
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "new"=>0,
    "title"=>"product name",
    "product-countdown"=>[],
    "count-star"=>3,
    "price"=>["old"=>"$65","new"=>"$45"],
    "link-href"=>"#",
    "size"=>["s","m","l","x"],
    "material"=>["woold","plastic"],
    "color"=>["black","white","blue"],
    ],
    ];
@endphp

@section("listproduct")
    @foreach ($products_card as $value)
        @include("client.component.productCard",[$value])
    @endforeach
@endsection