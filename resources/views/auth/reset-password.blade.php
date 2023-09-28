@extends( config('simple-auth.views.layouts.auth') )
@section('content')
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600 text-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Reset</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your new password here.</div>
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a new password" />
                                                        <label for="inputPassword">Password</label>
                                                        @if( $errors->has('password') )
                                                        <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="password_confirmation" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        @if( $errors->has('password_confirmation') )
                                                        <div class="invalid-feedback d-block">{{ $errors->first('password_confirmation') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{ route('template', ['page' => 'login']) }}">Return to login</a>
                                                <a class="btn btn-primary" href="{{ route('template', ['page' => 'login']) }}">Save password</a>
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
