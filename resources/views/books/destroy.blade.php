
  <h1>Eliminar libro</h1>
  <p>¿Está seguro de que desea eliminar el libro "{{ $book->title }}"?</p>
  <form action="{{ route('books.destroy', $book->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
    <a href="{{ route('books.index') }}">Cancelar</a>
  </form>


