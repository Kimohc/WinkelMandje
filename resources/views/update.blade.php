<form action="{{ route('taken.update', $taak->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $taak->id }}">
    <input type="text" name="userInputEdit" value="{{ $taak->taak }}">
    <button type="submit">Update</button>
</form>