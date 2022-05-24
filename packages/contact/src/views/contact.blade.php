<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>

<body>

    <form action="contact" method="POST"
          style="display: flex; border: 1px solid gray; padding:20px; flex-direction: column; width: 50%; gap: 10px; margin:auto;">
        <h1 style="margin: 5px; text-align: center">Contact with us</h1>
        <input type="text" style="padding: 5px" name="name" placeholder="enter your name">
        <input type="email" style="padding: 5px" name="email" placeholder="enter your email">
        <textarea name="message" cols="30" rows="5"></textarea>
        <button type="submit" style="padding: 5px; font-size: 16pt">Send</button>
    </form>
    <br>

    <div style="width: 70%; margin: auto; text-align: center">
        <h1>Contact Histories</h1>
        <table border="1" style="margin: auto">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>From</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                    <tr>
                        <td>{{ $history->created_at }}</td>
                        <td>{{ $history->name }}</td>
                        <td>{{ $history->to }}</td>
                        <td>{{ $history->from }}</td>
                        <td>{{ $history->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
