

@foreach($posts as $post)
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->text}}</p>
        <p>Created by: {{ $post->user['name'] }}</p>
    </div>
@endforeach
