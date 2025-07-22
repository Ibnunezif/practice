<x-layout>
    
    <form action="{{ route('register') }}" method="post">
        @csrf
        <h2>Register for an account</h2>

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
        <div class="my-2 text-red-500" >{{ $message }}</div>
        @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
        <div class="my-2 text-red-500" >{{ $message }}</div>
        @enderror

        <label for="password">Password:</label>
        <input type="password" name="password"  required>
        @error('password')
        <div class="my-2 text-red-500">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation"  required>

        <button type="submit" class="btn mt-4">Register</button>
    </form>

</x-layout>
