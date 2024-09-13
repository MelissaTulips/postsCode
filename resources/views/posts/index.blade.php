<x-app-layout>
    <h1>All posts</h1>

    <ul>
        @foreach ($posts as $post)
        <li>
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
            
        </li>
        @endforeach
        
    </ul>
</x-app-layout>