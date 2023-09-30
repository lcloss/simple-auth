@extends( config('simple-auth.views.layouts.auth') )
@section('content')
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Verify email') }}</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">{{ __('Please check your e-mail address and confirm it. If you didn\'t receive a message, you can resend it.') }}</div>
                                        <form action="{{ route('verification.send') }}" method="POST" class="row g-3">
                                            @csrf
                                            @include('simple-auth::partials.show-errors')
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" value="{{ old('email') }}"
                                                       placeholder="{{ __('name@example.com') }}" />
                                                <label for="inputEmail">{{ __('Email address') }}</label>
                                                @if( $errors->has('email') )
                                                <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('login') }}">{{ __('Return to login') }}</a>
                                                <button type="submit" class="btn btn-primary">{{ __('Resend confirmation') }}</button>
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
