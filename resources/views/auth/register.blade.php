<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container mx-auto mt-4">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
      <span>{{ $message }}</span>
    @enderror
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
      <span>{{ $message }}</span>
    @enderror
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
      <span>{{ $message }}</span>
    @enderror
      </div>
      <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
      </div>
      <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
        @error('phone_number')
      <span>{{ $message }}</span>
    @enderror
      </div>
      <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}">
        @error('address')
      <span>{{ $message }}</span>
    @enderror
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>

</html>