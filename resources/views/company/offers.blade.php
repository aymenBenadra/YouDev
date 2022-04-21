@extends('layout')

@section('main')
    <div class="container space-y-3">
        <x-links-header />
        @if ($offers->count())
            <div class="flex flex-wrap justify-around px-3">
                @foreach ($offers as $offer)
                    <x-offer :offer="$offer" />
                @endforeach
            </div>

            {{ $offers->onEachSide(3)->links() }}
        @else
            <div class="text-center space-y-4">
                <h2 class="text-lg text-gray-600">No offers yet.</h2>
                <p class="text-gray-600">
                    You can create an offer by clicking the button below.
                </p>
                <a href="{{ route('offer.create') }}" class="btn bg-blue-500 rounded-full border-0 btn-wide">
                    Create Offer
                </a>
            </div>
        @endif
    </div>
@endsection
