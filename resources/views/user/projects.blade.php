@extends('layout')

@section('main')
    <div class="container space-y-3">
        <x-links-header />

        <div class="flex flex-wrap justify-around px-3">
            @foreach ($projects as $project)
                <x-project :project="$project" />
            @endforeach
        </div>
    </div>
@endsection
