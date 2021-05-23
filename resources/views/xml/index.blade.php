@extends('home')

@section('title', 'Test')

@section('body')
    {{ _('BetAmounts') }}: <br>
    {{ implode( ' | ', $betAmounts) }}<br>
    {{ _('BetAmount sum') }}: {{ array_sum($betAmounts) }}
@endsection

