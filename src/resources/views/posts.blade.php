
@foreach($posts as $post)
<!-- Single Blog Post -->
<div class="single-blog-post d-flex flex-wrap mt-50">
    <!-- Thumbnail -->
    <div class="post-thumbnail mb-50">
        <a href="#"><img src="img/blog-img/{{$post->preview_image}}" alt=""></a>
    </div>
    <!-- Content -->
    <div class="post-content mb-50">
        <p class="post-date">{{$post->created_at->format("F d - Y")}} / {{$post->category->name}} </p>
        <a href="#" class="post-title">
            <h4>{{$post->title}}</h4>
        </a>
        <div class="post-meta">
            <a href="#"><span>by</span> {{$post->user->name}} </a>
            <a href="#"><i class="fa fa-eye"></i> {{$post->views}}</a>
            <a href="#"><i class="fa fa-comments"></i> 08</a>
        </div>
        <p class="post-excerpt">{{$post->preview_text}}.</p>
        <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    <!-- Post Curve Line -->
    <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
</div>
@endforeach
