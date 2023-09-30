@extends( config('simple-auth.views.layouts.auth') )
@section('title', __('Login'))
@section('content')
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Login') }}</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('login') }}" method="POST">
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
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password"
                                                       placeholder="{{ __('Password') }}" />
                                                <label for="inputPassword">{{ __('Password') }}</label>
                                                @if( $errors->has('password') )
                                                <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" name="remember" type="checkbox" value="1" />
                                                <label class="form-check-label" for="inputRememberPassword">{{ __('Remember Password') }}</label>
                                                @if( $errors->has('remember') )
                                                <div class="invalid-feedback d-block">{{ $errors->first('remember') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
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
