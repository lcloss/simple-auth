@extends( config('simple-auth.views.layouts.auth') )
@section('content')
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Password Reset') }}</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">{{ __('Enter your new password here.') }}</div>
                                        <form action="{{ route('password.update') }}" method="POST">
                                            @csrf
                                            @include('simple-auth::partials.show-errors')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password"
                                                               placeholder="{{ __('Create a new password') }}" />
                                                        <label for="inputPassword">{{ __('Password') }}</label>
                                                        @if( $errors->has('password') )
                                                        <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="password_confirmation"
                                                               type="password" placeholder="{{ __('Confirm password') }}" />
                                                        <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                                                        @if( $errors->has('password_confirmation') )
                                                        <div class="invalid-feedback d-block">{{ $errors->first('password_confirmation') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('login') }}">{{ __('Return to login') }}</a>
                                                <button type="submit" class="btn btn-primary">{{ __('Save password') }}</button>
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
