<x-layout>
    <h2>Currently available ninjas</h2>
    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninja.show', $ninja->id) }}" :highlight="$ninja['skill'] > 70" >
                <div>
                    <h2>{{ $ninja['name'] }}</h2>
                    <p>{{ $ninja->dojo->name }}</p>
                </div>
            </x-card> 
        </li>
        @endforeach
    </ul>
    {{ $ninjas->links() }}
</x-layout>
