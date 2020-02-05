
<div class="sidebar-module">
    <h4>Last five movies</h4>
    <ol class="list-unstyled">
        @foreach ($lastFive as $movie)
        <li><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></li>
        @endforeach
    </ol>
</div>

    
