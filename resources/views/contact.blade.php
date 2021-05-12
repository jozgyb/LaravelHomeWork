@extends('layouts.app')
@section('content')
<h2>Contact Us</h2>
    <p>By filling the form below you can send us a message.</p>
    <form id="messageForm" method="post">
        <div class="form-group">
            <label for="sender">Name</label>
            <input id="sender" type="text" name="sender" class="form-control" value="" required maxlength="75">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label for="sendermail">E-mail</label>
            <input id="sendermail" type="text" name="sendermail" class="form-control" value="" required maxlength="75">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input id="subject" type="text" name="subject" class="form-control" value="" required maxlength="255">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send">
        </div>
    </form>
@endsection
