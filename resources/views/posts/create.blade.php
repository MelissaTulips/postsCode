<x-app-layout>
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title: </label>
        <br>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <br>
        <input type="content" id="content" name="content">
        <br>
        <input type="submit" value="Create">

    </form>
</x-app-layout>