<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/form.css')
    <title>Dodaj Post</title>
</head>
<body>
<div class="container">
    <h1>Dodaj Nowy Post</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        <div>
            <label for="title">Tytuł:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="content">Treść:</label>
            <textarea id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
        </div>
        <div>
            <label for="header">Topka:</label>
            <input type="text" id="header" name="header" value="{{ old('header') }}">
        </div>
        <div>
            <button type="submit">Dodaj Post</button>
        </div>
    </form>
</div>
</body>
</html>
