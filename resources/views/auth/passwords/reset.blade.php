@extends('auth.layouts.app')

@section('content')



<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <h4>Rushukh</h4>
                </div>
                <h4>Admin Area</h4>
                <h6 class="fw-light">Reset Password</h6>
                <form  method="POST" action="{{ route('password.update') }}" class="pt-3">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">


                    <input type="email" id="exampleInputEmail1" placeholder="Admin Email" class="form-control form-control-lg  @error('email') is-invalid @enderror" name="email" value=" {{ $email ?? old('email') }}"
                    required autocomplete="email" autofocus>
                    @error('email')
                    <strong>{{ $message }}</strong>
                  @enderror
                  </div>

                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" >   {{ __('Reset Password') }}</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->






@endsection
