<x-layout>
    <form action="{{ route("login") }}" method="post">
        @csrf
        <h2>Log In to your account</h2>

        @error('cridentials')
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
        <div class="my-2 text-red-500" >{{ $message }}</div>
        @enderror

        <button type="submit" class="btn mt-4">Log in</button>
    </form>
</x-layout>
