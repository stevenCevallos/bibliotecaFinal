
    <div class="container">
        <div>
            <div class="col-md-8">
                <div>
                    <h1>Edita el libro</h1>
                    <div>
                        <form method="POST" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="title">{{ __('Title') }}</label>

                                <div>
                                    <input id="title" type="text"  name="title" value="{{ $book->title }}" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div>
                                <label for="author">{{ __('Author') }}</label>

                                <div class="col-md-6">
                                    <input id="author" type="text" name="author" value="{{ $book->author }}" required autocomplete="author">

                                    @error('author')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div>
                                <label for="price">{{ __('price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" name="price" value="{{ $book->price }}" required autocomplete="price">

                                    @error('price')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div>
                                <label for="description">{{ __('description') }}</label>

                                <div>
                                    <input id="description" type="text" name="description" value="{{ $book->description }}" required autocomplete="description">

                                    @error('description')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div>
                                <label for="published_date">{{ __('published_date') }}</label>

                                <div class="col-md-6">
                                    <input id="published_date" type="text" name="published_date" value="{{ $book->published_date }}" required autocomplete="published_date">

                                    @error('published_date')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <button type="submit">
                                        {{ __('Actualiza') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

