<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register</h1>

@if ($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>

<p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</body>
</html>
