@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600">Update Project</h2>
            <form action="{{ route('project.edit', $project->id) }}" method="POST">
                @csrf
                <input type="text" placeholder="Title..." name="title" value="{{ $project->title }}"
                    class="input w-full max-w-xs" required>
                <textarea class="textarea input w-full max-w-xs" placeholder="Description..." name="description"
                    required>{{ $project->description }}</textarea>
                <input type="url" placeholder="Image link..." name="image_link" value="{{ $project->image_link }}"
                    class="input w-full max-w-xs" required>
                <input type="url" placeholder="Github link..." name="github_link" value="{{ $project->github_link }}"
                    class="input w-full max-w-xs">
                <input type="url" placeholder="Design link..." name="design_link" value="{{ $project->design_link }}"
                    class="input w-full max-w-xs">

                <div class="card-actions justify-center">
                    <button type="submit" class="btn bg-blue-500 rounded-full border-0 btn-wide">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
