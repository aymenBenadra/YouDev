@extends('layout')

@section('main')
    <div class="card w-2/5 bg-base-100 drop-shadow-2xl border-blue-600 border-2">
        <div class="card-body items-center text-center pb-3 space-y-2">
            <h2 class="card-title text-blue-600 ">For Companies</h2>
            <form action="/login/company" method="POST">
                @csrf
                <input type="text" placeholder="Name..." name="name" class="input w-full max-w-xs">
                <input type="password" placeholder="Password..." name="password" class="input w-full max-w-xs">

                <div class=card-actions justify-center>
                    <a href="/login/company">
                        <button type="submit" class="btn bg-blue-500 rounded-full border-0 btn-wide">Login</button>
                    </a>
                </div>
            </form>
            <p>Don't have an account? <a href="/register/company" class="link link-hover text-blue-600">Sign up</a></p>
        </div>
    </div>
@endsection
