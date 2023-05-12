<div class="slider-item style{{$key+7}}" >
    <div class="slider-inner equal-element"
    style="background-image: url({{$value["background-image"]}})">
    {{-- style.css 6696 --}}
       <div class="slider-infor">
           <h5 class="title-small">
               {{$value["title-Small"]}}
           </h5>
           <h3 class="title-big">
               {{$value["title-big"]}}
           </h3>
           <div class="price">
               New Price:
               <span class="number-price">
                   {{$value["new-price"]}}
               </span>
               </div>
               <a href="{{$value['link-href']}}" class="button btn-shop-the-look bgroud-style">Shop now</a>
           </div>
       </div>
</div>