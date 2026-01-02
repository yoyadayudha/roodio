<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Song</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="{{ route('admin.songs.create') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title">
        <label for="lyrics">Lyrics</label>
        <textarea name="lyrics"></textarea>
        <label for="artist">Artist</label>
        <input type="text" name="artist">
        <label for="genre">genre</label>
        <input type="text" name="genre">
        <label for="publisher">publisher</label>
        <input type="text" name="publisher">
        <label for="datePublished"></label>
        <input type="date" name="datePublished">
        <label name="song">
        <input type="file" name="song">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
