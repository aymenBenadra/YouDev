@props(['offer' => $offer, 'full' => false])

@php
$base = 'card bg-base-100 shadow-xl mx-1 my-3 border-2 border-blue-600 ';
$class = $base . (!$full ? 'w-2/5 max-w-xs min-w-min' : 'w-2/3 min-w-min');
@endphp

<div class="{{ $class }}">
    <div class="card-body">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ $offer->company->logo_link }}" alt="{{ $offer->company->name }}"
                    class="w-8 h-8 rounded-full mr-2">
                <h3 class="text-blue-600">{{ $offer->company->name }}</h3>
            </div>
            @if (Auth::guard('company')->user() == $offer->company)
                <div class="card-actions justify-end">
                    <div class="badge badge-info badge-outline"><a
                            href="{{ route('offer.update', $offer->id) }}">Update</a></div>
                    <div class="badge badge-error badge-outline">
                        <form action="{{ route('offer.delete', $offer->id) }}" method="POST">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
        <h2 class="card-title">
            {{ $offer->title }}
        </h2>
        <p>{{ !$full ? Str::substr($offer->description, 0, 80) . '...' : $offer->description }}</p>
        <div class="card-actions justify-end">
            <div class="badge bg-blue-600 text-white hover:bg-neutral-focus border-0 badge-lg">
                <a href="{{ $offer->application_link }}">Apply</a>
            </div>
        </div>
    </div>
</div>
