@extends( config('simple-auth.views.layouts.auth') )
@section('title', __('Register'))
@section('content')
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Create Account') }}</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="first_name" type="text" placeholder="{{ __('Enter your first name') }}" />
                                                        <label for="inputFirstName">{{ __('First name') }}</label>
                                                        @if( $errors->has('first_name') )
                                                        <div class="invalid-feedback d-block">{{ $error->first('first_name') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="last_name" type="text" placeholder="{{ __('Enter your last name') }}" />
                                                        <label for="inputLastName">{{ __('Last name') }}</label>
                                                        @if( $errors->has('last_name') )
                                                        <div class="invalid-feedback d-block">{{ $error->first('last_name') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="{{ __('name@example.com') }}" />
                                                <label for="inputEmail">{{ __('Email address') }}</label>
                                                @if( $errors->has('email') )
                                                <div class="invalid-feedback d-block">{{ $error->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="{{ __('Create a password') }}" />
                                                        <label for="inputPassword">{{ __('Password') }}</label>
                                                        @if( $errors->has('password') )
                                                        <div class="invalid-feedback d-block">{{ $error->first('password') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="password_confirmation" type="password" placeholder="{{ __('Confirm password') }}" />
                                                        <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                                                        @if( $errors->has('password_confirmation') )
                                                        <div class="invalid-feedback d-block">{{ $error->first('password_confirmation') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Create Account') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('login') }}">{{ __('Have an account? Go to login') }}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
