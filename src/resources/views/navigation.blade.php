<div class="classynav">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Catagories</a>
            <ul class="dropdown">
                @foreach($categories as $category)
                <li><a href="{{route('category', $category->slug)}}">- {{$category->name}}</a></li>
                    @endforeach
            </ul>
        </li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contacts') }}">Contact</a></li>
    </ul>

</div>
