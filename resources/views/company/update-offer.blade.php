@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600">Update Offer</h2>
            <form action="{{ route('offer.edit', $offer->id) }}" method="POST">
                @csrf
                <input type="text" placeholder="Title..." name="title" value="{{ $offer->title }}"
                    class="input w-full max-w-xs" required>
                <textarea class="textarea input w-full max-w-xs" name="description" placeholder="Description..."
                    required>{{ $offer->description }}</textarea>
                <input type="url" placeholder="Application link..." name="application_link"
                    value="{{ $offer->application_link }}" class="input w-full max-w-xs" required>
                <div class="card-actions justify-center">
                    <button type="submit" class="btn bg-blue-500 rounded-full border-0 btn-wide">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
