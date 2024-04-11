<x-layout>
    <h1>index</h1>
    <a href="{{ route('note.create') }}">New Note</a>
    <table>
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
                    <td>
                        <a href="{{ route('note.show', $note) }}">View</a>
                        <a href="{{ route('note.edit', $note) }}">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
