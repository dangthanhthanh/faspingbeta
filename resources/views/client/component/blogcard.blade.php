<li class="blog-item">
    <div class="post-format">
        <a href="#">
            <img src="{{$value["image-blog"]}}" alt="img">
        </a>
    </div>
    <div class="post-info">
        <div class="category-blog">
            <a href="#">{{$value["category-blog"]}}</a>
        </div>
        <h3 class="post-title">
            <a href="#">{{$value["post-title"]}}<span>[...]</span></a>
        </h3>
        <div class="main-info-post">
            <p class="des">
                {{$value["decription"]}}
            </p>
        </div>
        <div class="author-view">
            <div class="author">
                <div class="avt">
                    <img src="{{$value["image-author"]}}" alt="img">
                </div>
                <h3 class="name">
                    {{$value["name-author"]}}
                </h3>
            </div>
            <div class="review">
                <div class="view">
                    <span class="icon-view">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </span>
                    <span class="count">
                        {{$value["view"]}}
                    </span>
                </div>
                <div class="s-comments">
                    <span class="icon-cmt">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                    </span>
                    <span class="count">
                        {{$value["comment"]}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</li>