@extends( config('simple-auth.views.layouts.auth') )
@section('content')
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600 text-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600 text-success">
                                A new email verification link has been emailed to you!
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Verify email</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Please check your e-mail address and confirm it. If you didn't receive a message, you can resend it.</div>
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                @if( $errors->has('email') )
                                                <div class="invalid-feedback d-block">{{ $error->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('template', ['page' => 'login']) }}">Return to login</a>
                                                <a class="btn btn-primary" href="{{ route('template', ['page' => 'login']) }}">Resend confirmation</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('template', ['page' => 'register']) }}">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
