<!DOCTYPE html>
<html lang="en">
<head>
    <style>

    </style>
</head>
<body>
    <div id="chatList">
        @foreach($conversations as $conversation)
            <p>{{$conversation->user->user_profile->first_name}} {{$conversation->user->user_profile->last_name}} : {{$conversation->content}}</p>
        @endforeach
    </div>
    <div id="form">
        <form action="send_message/{{$message->id}}" method="post">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="text" name="content"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>