@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @foreach (Auth::user()->roles as  $role)
                               {{-- @foreach ($role->name as $per) --}}
                                   @if ($role->name == 'super_admin')
                                      <li><a href="{{ route("user.index") }}">Users</a></li>
                                      @else
                                      <li><a href="#">sorry</a></li>
                                   @endif
                               {{-- @endforeach --}}
                           @endforeach
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
