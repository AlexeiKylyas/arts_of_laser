@extends('layouts.app')

@section('content')
    <div>
        @foreach($services as $service)
            <span>{{ $service->name }}</span>
            <span>{{ $service->description }}</span>
        @endforeach
    </div>
@endsection
