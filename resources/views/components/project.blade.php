@props(['project' => $project])

<div class="card w-2/5 max-w-xs min-w-min bg-base-100 shadow-xl mx-1 my-3 border-2 border-blue-600">

    <figure><img src="{{ $project->image_link }}" alt="Shoes" class="object-cover h-36 w-full" /></figure>
    <div class="card-body">
        <div class="card-actions justify-end">
            <div class="badge badge-info badge-outline"><a href="/project/update/{{ $project->id }}">Update</a></div>
            <div class="badge badge-error badge-outline"><a href="/delete/project/{{ $project->id }}">Delete</a></div>
        </div>
        <h2 class="card-title">
            {{ $project->title }}
        </h2>
        <p>{{ Str::substr($project->description, 0, 80) . '...' }}</p>
        <div class="card-actions justify-end">
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg"><a
                    href="{{ $project->design_link }}">Design</a></div>
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg"><a
                    href="{{ $project->github_link }}">Github</a></div>
        </div>
    </div>
</div>
