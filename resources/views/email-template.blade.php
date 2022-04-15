<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 >Contact Body</h1>

    <p>Name of Requester :{{ $detail['name'] }}</p>
    <p>Email Address :{{ $detail['email'] }}</p>
    <p>Phone(Whatsapp) :{{ $detail['phone'] }}</p>
    <p>Date Event is Requested :{{ $detail['date'] }}</p>
    <p>City :{{ $detail['city'] }}</p>

    <p>Country :{{ $detail['country'] }}</p>
    <p>TimeZone :{{ $detail['timezone'] }}</p>

    <p>Name of the Artist or Celebrity or Literary person requested :{{ $detail['artist_request'] }}</p>
    <p>Type of Event Requested :{{ $detail['eve_request'] }}</p>
    <p>Any Other Special Requirements :{{ $detail['spec_req'] }}</p>
    <p>Number Of Expected Audience For This Event :{{ $detail['aud_event'] }}</p>
    <p>How Many **First Row Audience Expected? :{{ $detail['aud_exp'] }}</p>
    <p>How Many General Audience Expected? :{{ $detail['gen_exp'] }}</p>
    <p>Audience City :{{ $detail['aud_city'] }}</p>
    <p>Audience Country :{{ $detail['aud_country'] }}</p>
    <p>Audience TimeZone :{{ $detail['aud_time'] }}</p>
    <p>Will This Be An Exclusive and Private Event (Yes/ No) :{{ $detail['priv_eve'] }}</p>

    <p>Will You Need Our Assistance Selling Tickets For This Event? (Yes/ No) :{{ $detail['ticket'] }}</p>




    {{-- <p>Date :{{ $data['date'] }}</p>

    <p>Time :{{ $data['time'] }}</p> --}}


</body>
</html>
