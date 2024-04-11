<x-app-layout>
    <div class="container mx-auto max-w-6xl px-8 py-16">
        <h1 class="text-3xl font-bold mb-4">Edit Note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-4">
                <textarea name="note" class="textarea textarea-bordered textarea-md w-full" rows="8" placeholder="My note...">{{ $note->note }}</textarea>
                <div class="flex flex-row justify-end">
                    <div>
                        <a href="{{ route('note.index') }}" class="btn">Cancel</a>
                        <button type="submit" class="btn btn-neutral">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
