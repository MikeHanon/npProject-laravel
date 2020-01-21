@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien vous a été envoyé') }}
                        </div>
                    @endif

                    {{ __('Avant de vous connectez, veuillez verifier vos mails') }}
                    {{ __('Si vous n\'avez pas recu le mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquer ici pour en recevoir un nouveau') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
