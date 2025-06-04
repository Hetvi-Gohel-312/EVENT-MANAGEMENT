<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Create Event</h1>
    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" required><br><br>

        <button type="submit">Save Event</button>
    </form>
</body>
</html>
