<x-app-layout>
    <div class="container mx-auto max-w-6xl px-8 py-16">
        <div class="flex justify-between mb-5">
            <h1 class="text-3xl font-bold mb-4">Notes</h1>
            <a href="{{ route('note.create') }}" class="btn btn-neutral">New Note</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Note</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ \Illuminate\Support\Str::words($note->note, 20) }}
                            <td class="flex space-x-1">
                                <a href="{{ route('note.show', $note) }}" class="link">View</a>
                                <a href="{{ route('note.edit', $note) }}" class="link">Edit</a>
                                <form action="{{ route('note.destroy', $note) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="link">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>{{ $notes->links() }}</div>
        </div>
    </div>
</x-app-layout>
