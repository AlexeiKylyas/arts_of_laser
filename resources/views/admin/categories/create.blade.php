<!-- Представлення: create.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Category') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="short_desc">{{ __('Short description') }}</label>
                                <input id="short_desc" type="text" class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" value="{{ old('short_desc') }}" required autofocus>

                                @error('short_desc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="full_desc">{{ __('Full description') }}</label>
                                <input id="full_desc" type="text" class="form-control @error('full_desc') is-invalid @enderror" name="full_desc" value="{{ old('full_desc') }}" required autofocus>

                                @error('full_desc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="photo">{{ __('Photo') }}</label>
                                <input id="photo" type="file"
                                       class="form-control-file @error('photo') is-invalid @enderror" name="photo"
                                       required>
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="show_on_main">Show on Main Page:</label>
                                <input type="checkbox" id="show_on_main" name="show_on_main" value="1">
                            </div>

                            <!-- Додайте інші поля форми за необхідності -->

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
