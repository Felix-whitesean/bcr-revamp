<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inbox</h2>
    <table>
        <tr>
            <th>From</th>
            <th>Subject</th>
            <th>Body</th>
            <th>Date</th>
        </tr>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->getFrom()[0]->mail }}</td>
            <td>{{ $message->getSubject() }}</td>
            <td class=" max-w-[200px] max-h-[10px] overflow-y-auto">{!! nl2br(e($message->getTextBody())) !!}</td>
            <td>{{ $message->getDate() }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
