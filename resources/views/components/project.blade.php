@props(['project' => $project, 'full' => false])

@php
$base = 'card bg-base-100 shadow-xl mx-1 my-3 border-2 border-blue-600 ';
$class = $base . (!$full ? 'w-2/5 max-w-xs min-w-min' : 'w-2/3 min-w-min');
@endphp

<div class="{{ $class }}}">

    <figure><img src="{{ $project->image_link }}" alt="Shoes" class="object-cover h-36 w-full" /></figure>
    <div class="card-body">
        @if (auth()->user() == $project->user)
            <div class="card-actions justify-end">
                <div class="badge badge-info badge-outline"><a
                        href="{{ route('project.update', $project->id) }}">Update</a>
                </div>
                <div class="badge badge-error badge-outline">
                    <form action="{{ route('project.delete', $project->id) }}" method="POST">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endif
        @if (!$full)
            <h2 class="card-title hover:text-blue-600">
                <a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a>
            </h2>
        @else
            <h2 class="card-title">
                {{ $project->title }}
            </h2>
        @endif
        <p>{{ Str::substr($project->description, 0, 80) . '...' }}</p>
        <div class="card-actions justify-end">
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg"><a
                    href="{{ $project->design_link }}">Design</a></div>
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg"><a
                    href="{{ $project->github_link }}">Github</a></div>
        </div>
    </div>
</div>
