<x-layout>
    <h2>create page </h2>

    <form method="post" action="{{ route("ninja.store") }}">
        @csrf
        {{-- cross site request forgery --}}

    {{-- ninja name --}}
    <label for="name" >Ninja Name: </label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required />

        {{-- ninja strength --}}
    <label for="skill" >Ninja Skill (0-100): </label>
    <input type="number" id="skill" value="{{ old('skill') }}" name="skill" required />

        {{-- ninja Bio --}}
    <label for="bio" >Ninja Bio: </label>
    <textarea rows="5" id="bio"  name="bio" required >{{ old('bio') }}</textarea>

        {{-- select a dojo --}}
    <label for="dojo_id" >Dojo: </label>
    <select id="dojo_id" name="dojo_id" required>
        <option value="" disabled selected>select a dojo</option>
        @foreach ($dojos as $dojo )
            <option value="{{ $dojo->id }}" {{ $dojo->id == old ('dojo_id')? 'selected' : ''}}>{{ $dojo->name }}</option>
        @endforeach
    <select>

    <button type="submit" class="btn mt-4">create Ninja</button>
    </form>
    
    @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">
        @foreach ($errors->all() as $error )
            <li class="my-2 text-red-500">
                {{ $error }}
            </li>
        @endforeach
    </ul>
    @endif
    
</x-layout>