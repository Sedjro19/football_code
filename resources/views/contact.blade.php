@extends('layouts.master')

@section('title', 'Contact')

@section('content')

<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Article Details</h1>
            </div>
        </div>
    </div>
</header>

<!-- Contact -->
<div id="contact" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Contact details</h2>
                <p class="p-heading">Of will at sell well at as. Too want but tall nay like old removing yourself today</p>
                <ul class="list-unstyled li-space-lg">
                    <li><i class="fas fa-map-marker-alt"></i> &nbsp;22 Innovative, San Francisco, CA 94043, US</li>
                    <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+81 720 2212</a></li>
                    <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@site.com">contact@site.com</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <!-- Message de confirmation -->
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Formulaire de contact -->
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control-input @error('name') is-invalid @enderror" name="name" placeholder="Nom" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea @error('message') is-invalid @enderror" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
