@extends('layout')

@section('main')
    <div class="w-2/3 flex flex-col h-full justify-center">
        <h1 class="text-4xl text-blue-600 ml-4">Connecting Job seekers <br />with Great Companies!</h1>
        <div class="flex justify-around align-content-center mt-10">
            <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
                <div class="card-body items-center text-center pb-3">
                    <h2 class="card-title text-blue-600">For Companies</h2>
                    <p>Scout talents today and find your next dev and design star team! Send your offers and wait for
                        talents to come.</p>
                    <div class="card-actions">
                        <a href="/login/company">
                            <button class="btn bg-blue-500 rounded-full border-0 btn-wide">Recruit Now!</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
                <div class="card-body items-center text-center pb-3">
                    <h2 class="card-title text-blue-600">For Job Seekers</h2>
                    <p>Connect today with a growing network of like minded individuals and create tomorrows future
                        Today!</p>
                    <div class="card-actions">
                        <a href="/login">
                            <button class="btn bg-blue-500 rounded-full border-0 btn-wide">Share Now!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-h-full w-1/3">
        <img src="/images/illustration.svg" alt="illustration" class="w-auto">
    </div>
@endsection
