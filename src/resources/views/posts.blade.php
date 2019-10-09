@foreach($posts as $post)
<!-- Single Blog Post -->
<div class="single-blog-post d-flex flex-wrap mt-50">
    <!-- Thumbnail -->
    <div class="post-thumbnail mb-50">
        <a href="{{route('post', $post)}}"><img src="../../public/img/blog-img/{{$post->preview_image}}" alt=""></a>
    </div>
    <!-- Content -->
    <div class="post-content mb-50">
        <p class="post-date"><a href="{{route('posts_date', $post->created_at)}}"> {{$post->created_at->format("F d - Y")}} </a> / {{$post->category->name}} </p>
        <a href="#" class="post-title">
            <h4><a href="{{route('post', $post)}}">{{$post->title}}</a></h4>
        </a>
        <div class="post-meta">
            <a href="{{route('posts.by.author', $post->user)}}"><span>by</span> {{$post->user->name}} </a>
            <a href="#"><i class="fa fa-eye"></i> {{$post->views}}</a>
            <a href="#"><i class="fa fa-comments"></i> {{$post->comments}}</a>
        </div>
        <p class="post-excerpt">{{$post->preview_text}}.</p>
        <a href="{{route('post', $post)}}" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    <!-- Post Curve Line -->
    <img class="post-curve-line" src="../../public/img/core-img/post-curve-line.png" alt="">
</div>
@endforeach
