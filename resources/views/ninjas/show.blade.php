<x-layout>
<p>Ninja name = {{ $ninja['name'] }}</p>
<div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $ninja->skill }}</p>
    <p><strong>About:</strong></p>
    <p> {{ $ninja->bio }}</p>
</div>
{{-- dojo info --}}
<div>
    <h3>Dojo Information</h3>
    <p><strong>Dojo Name:</strong> {{ $ninja->dojo->name }}</p>
    <p><strong>location:</strong>{{ $ninja->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p> {{ $ninja->dojo->description }}</p>

</div>
<form method="post" action="{{ route('ninja.destroy',$ninja->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn my-4">Delete Ninja</button>
</form>
</x-layout>
