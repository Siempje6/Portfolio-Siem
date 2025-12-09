<!DOCTYPE html>
<html>
<head>
    <title>Contactformulier</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Contacteer mij</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>Naam:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Bericht:</label>
        <textarea name="message">{{ old('message') }}</textarea><br>

        <button type="submit">Verstuur</button>
    </form>
</body>
</html>
