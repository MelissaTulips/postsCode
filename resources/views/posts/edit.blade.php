<x-app-layout>
    <h1>Edit post</h1>

    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('put')
        <label for="title">Title: </label>
        <br>
        <input type="text" id="title" name="title" value="{{$post->title}}">
        <br>
        <label for="content">Content: </label>
        <br>
        <input type="content" id="content" name="content" value="{{$post->content}}">
        <br>
        <input type="submit" value="Update">

    </form>
</x-app-layout>