<x-app-layout>
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->content}}</p>

    <br>
    <form action="{{route('posts.addcomment', $post)}}" method="post">
        @csrf
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>

        <input type="submit" value="Create">

    </form>
        
    </ul>
</x-app-layout>