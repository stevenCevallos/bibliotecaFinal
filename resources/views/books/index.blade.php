<!-- @foreach($books as $book)
{{ $book->author }}
@endforeach -->

 
    <div class="container">
        <h1>Lista de libros</h1>
        <hr>

        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <!-- <img class="card-img-top" src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->title }}"> -->
                        <div class="card-body">
                            
                            <h3 class="card-title">{{ $book->title }}</h3>
                            <p class="card-text"> id: {{ $book->id }}</p>
                            <p class="card-text">isbn: {{ $book->isbn }}</p>
                            <p class="card-text">author: {{ $book->author }}</p>
                            <p class="card-text">published_date: {{ $book->published_date }}</p>
                            <p class="card-text">description: {{ $book->description}}</p>
                            <p class="card-text"> price: {{ $book->price }} €</p>
                            <!-- <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-secondary">Ver detalles</a> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
