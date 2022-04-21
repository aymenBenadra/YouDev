@extends('layout')

@section('main')
    <div class="container space-y-3">
        <x-links-header />

        @if ($projects->count())
            <div class="flex flex-wrap justify-around px-3">
                @foreach ($projects as $project)
                    <x-project :project="$project" />
                @endforeach
            </div>

            {{ $projects->onEachSide(3)->links() }}
        @else
            <div class="text-center space-y-4">
                <h2 class="text-lg text-gray-600">No projects yet.</h2>
                <p class="text-gray-600">
                    You can create a project by clicking the button below.
                </p>
                <a href="{{ route('project.create') }}" class="btn bg-blue-500 rounded-full border-0 btn-wide">
                    Create Project
                </a>
            </div>
        @endif
    </div>
@endsection
