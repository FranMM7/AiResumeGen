@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <!-- Navigation Menu -->
            <div class="list-group">
                <a href="{{ route('personal-data.index') }}" class="list-group-item list-group-item-action">Personal Information</a>
                <a href="{{ route('professional-history.index') }}" class="list-group-item list-group-item-action">Experiences</a>
                <a href="{{ route('titles-certificates.index') }}" class="list-group-item list-group-item-action">Certificates</a>
                <a href="{{ route('tools-skills.index') }}" class="list-group-item list-group-item-action">Skills</a>
                <!-- Add additional menu items as needed -->
            </div>
        </div>

        <div class="col-md-9">
            <!-- Main Content Area -->
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
