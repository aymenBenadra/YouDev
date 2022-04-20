@props(['offer' => $offer])

<div class="card w-2/5 max-w-xs min-w-min bg-base-100 shadow-xl mx-1 my-3 border-2 border-blue-600">
    <div class="card-body">
        <div class="card-actions justify-end">
            <div class="badge badge-info badge-outline"><a href="/offer/update/{{ $offer->id }}">Update</a></div>
            <div class="badge badge-error badge-outline"><a href="/delete/offer/{{ $offer->id }}">Delete</a></div>
        </div>
        <h2 class="card-title">
            {{ $offer->title }}
        </h2>
        <p>{{ Str::substr($offer->description, 0, 80) . '...' }}</p>
        <div class="card-actions justify-end">
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg">
                <a href="{{ $offer->application_link }}">Apply</a>
            </div>
        </div>
    </div>
</div>
