@extends('mails/base')

@section('content_table')
    <table>
        <tr>
            <td>
                <img src="https://www.group-edenis.com/images/welcome_ban.jpg" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">

                <div class="text" style="padding: 0 2.5em; text-align: center;">

                    <br><br>
                    <h1>Hello {{$nom}} {{$prenom}}</h1>
                    <h3>Thank you for registering as member of our community</h3>
                    <a href="https://t.me/+4Mp8prFTO8JkYjI8">
                    <h2 style="padding:8px; border-radius: 7px; background-color: yellow; color:black">
                        Join our telegram community
                            <img height="25" width="25" src="https://www.group-edenis.com/images/pngegg.png">
                    </h2>
                    </a>

                </div>
            </td>
        </tr>
    </table>
@endsection
