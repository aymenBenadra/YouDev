@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600">Update Project</h2>
            <input type="text" value="{{ $project->title }}" class="input w-full max-w-xs" required>
            <textarea class="textarea input w-full max-w-xs" required>{{ $project->description }}</textarea>
            <input type="url" value="{{ $project->image_link }}" class="input w-full max-w-xs" required>
            <input type="url" value="{{ $project->design_link }}" class="input w-full max-w-xs">
            <input type="url" value="{{ $project->github_link }}" class="input w-full max-w-xs">

            <div class="card-actions">
                <a href="/projects">
                    <button class="btn bg-blue-500 rounded-full border-0 btn-wide">Submit</button>
                </a>
            </div>
        </div>
    </div>
@endsection
