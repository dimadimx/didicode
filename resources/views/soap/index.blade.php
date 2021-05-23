@extends('home')

@section('title', 'Test')

@section('body')
    {{ _('Soap names:') }}<br>
    {{ implode( ' | ', $data) }}<br>
@endsection

