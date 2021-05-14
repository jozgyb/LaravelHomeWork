@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="col-12">
        <div class="table-responsive-md">
            <table class="table table-hover">
            <caption>All messages from the database, descending order.</caption>
                <thead>
                    <tr>
                        <th scope="col">From</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{$message['sender']}}</td>
                            <td>{{$message['email']}}</td>
                            <td>{{$message['subject']}}</td>
                            <td>{{$message['message']}}</td>
                            <td>{{$message['created_at']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
