@extends('home')

@section('title', 'Test')

@section('body')
    @foreach ($view3d as $collect)
        {{ implode( ' | ', $collect->toArray()) }}
        <br>
    @endforeach
@endsection

