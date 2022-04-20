@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600">Update Offer</h2>
            <input type="text" value="{{ $offer->title }}" class="input w-full max-w-xs" required>
            <textarea class="textarea input w-full max-w-xs" required>{{ $offer->description }}</textarea>
            <input type="url" value="{{ $offer->application_link }}" class="input w-full max-w-xs" required>

            <div class="card-actions">
                <a href="/offers">
                    <button class="btn bg-blue-500 rounded-full border-0 btn-wide">Submit</button>
                </a>
            </div>
        </div>
    </div>
@endsection
