@extends('layouts.app')
@section('content')
<div class="container mt-5">
        <h2>Contact Us</h2>
    <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <p>By filling the form below you can send us a message.</p>
        <form id="messageForm" method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label for="sender">Name</label>
                <input id="sender" type="text" name="sender" class="form-control {{ $errors->has('sender') ? 'error' : '' }}" value="" required maxlength="75">

                @if ($errors->has('sender'))
                <div class="error">
                    {{ $errors->first('sender') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input id="email" type="text" name="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" value="" required maxlength="75">

                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input id="subject" type="text" name="subject" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" value="" required maxlength="255">

                @if ($errors->has('subject'))
                <div class="error">
                    {{ $errors->first('subject') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" required></textarea>

                @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="send" value="Send">
            </div>
        </form>
    </div>
@endsection
