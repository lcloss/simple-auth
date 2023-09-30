@extends( config('simple-auth.views.layouts.auth') )
@section('title', __('Reset Password'))
@section('content')
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Password Recovery') }}</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">{{ __('Enter your email address and we will send you a link to reset your password.') }}</div>
                                        <form action="{{ route('password.request') }}" method="POST">
                                            @csrf
                                            @include('simple-auth::partials.show-errors')
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" value="{{ old('email') }}"
                                                       placeholder="{{ __('name@example.com') }}" />
                                                <label for="inputEmail">{{ __('Email address') }}</label>
                                                @if( $errors->has('email') )
                                                <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('login') }}">{{ __('Return to login') }}</a>
                                                <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('register') }}">{{ __('Need an account? Sign up!') }}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
