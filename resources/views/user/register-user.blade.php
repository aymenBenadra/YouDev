@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600">For Job Seekers</h2>
            <form action="/register" method="POST">
                @csrf
                <input type="text" placeholder="First Name..." name="first_name" class="input w-full max-w-xs">
                <input type="text" placeholder="Last Name..." name="last_name" class="input w-full max-w-xs">
                <input type="email" placeholder="Email..." name="email" class="input w-full max-w-xs">
                <input type="password" placeholder="Password..." name="password" class="input w-full max-w-xs">

                <div class="card-actions">
                    <a href="/register">
                        <button type="submit" class="btn bg-blue-500 rounded-full border-0 btn-wide">Sign up</button>
                    </a>
                </div>
            </form>
            <p>Already have an account? <a href="/login" class="link link-hover text-blue-600">Login</a></p>
        </div>
    </div>
@endsection
