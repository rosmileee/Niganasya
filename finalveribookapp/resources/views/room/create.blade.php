<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>
</head>
<body>
    <h1>Create a New Room</h1>
    <form method="post" action="{{ route('room.store') }}">
        @csrf
        <label for="room_number">Room Number:</label>
        <input type="text" id="room_number" name="room_number" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="price">
