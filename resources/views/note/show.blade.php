<x-app-layout>
    <div class="container mx-auto max-w-6xl px-8 py-16">
        <div class="flex justify-between mb-5">
            <h1 class="text-3xl font-bold mb-4">Note: {{ $note->created_at }}</h1>
            <div class="flex space-x-1">
                <a href="{{ route('note.edit', $note) }}" class="btn btn-neutral">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error">Delete</button>
                </form>
            </div>
        </div>
        <p>{{ $note->note }}</p>
    </div>
</x-app-layout>
