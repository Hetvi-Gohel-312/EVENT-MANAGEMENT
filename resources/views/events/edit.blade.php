<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Event</h1>
    <form method="POST" action="{{ route('events.update', $event->id) }}">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $event->title) }}" required><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description', $event->description) }}</textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" value="{{ old('date', $event->date ? $event->date->format('Y-m-d') : '') }}" required>


        <button type="submit">Update Event</button>
    </form>
</body>
</html>
