@extends('layout')

@section('main')
    <div class="container space-y-3">
        <x-links-header />

        <div class="flex flex-wrap justify-around px-3">
            @foreach ($offers as $offer)
                <x-offer :offer="$offer" />
            @endforeach
        </div>
    </div>
@endsection
