@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ksiązki') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            @foreach($books as $book)
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('books.edit', $book) }}">
                                                    {{ $book->title }}
                                                </a>
                                            </h5>
                                            <span class="card-text">
                                                <p>
                                                    ISBN: {{ $book->isbn }}
                                                </p>
                                                <p>
                                                    Binding: {{ $book->binding->text() }}
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
