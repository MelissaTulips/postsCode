<x-app-layout>
    <h1>All posts</h1>
    <br>

    <a href="{{route ('posts.create')}}">Create</a>

    

    <ul>
        @foreach ($posts as $post)
        <li>
            <br>
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
            <div>
                <a href="{{route ('posts.show', $post)}}">Show</a>
                <a href="{{route ('posts.edit', $post)}}">Edit</a>
                <form action="{{route('posts.destroy', $post)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">

                </form>
              
            </div> 
        </li>
        @endforeach
        
    </ul>
</x-app-layout>