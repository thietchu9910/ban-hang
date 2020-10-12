@extends('auth_layout.main')

@section('title', 'Signup')

@section('content')
    <form action="">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="First name" name="first_name">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Last name" name="last_name">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="input-group mb-4">
            <input type="password" class="form-control" placeholder="Rewrite Password" name="re_password">
        </div>
        <div class="form-group text-left mt-2">
            <div class="checkbox checkbox-primary d-inline">
                <input type="checkbox" name="new_letter" id="checkbox-fill-2">
                <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block mb-4 rounded-pill">Sign up</button>
        <p class="mb-2">Already have an account? <a href="{{route('login.index')}}" class="f-w-400">Signin</a></p>
    </form>
@endsection

@section('script')@endsection
