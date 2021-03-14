<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>I-Oasis</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

</head>

<body style="background:#f1f1f1;padding-top:20px;padding-bottom:20px;">
    <center>
        <table class="" border="0" cellspacing="0" cellpadding="0" width="600"
            style="width:6.25in;background:#ffffff; border-collapse:collapse;padding:20px 20px 20px 20px;">
            <tbody>
                <tr>
                    <td height="30"></td>
                </tr>   
                <tr>
                    <td style="padding: 0px 20px 0px 18px;">
                        <label for="">Name:
                            @if(!empty($data['name']))
                                <span>{{ $data['name'] }}</span>
                            @endif
                        </label>
                    </td>
                </tr>         
               
                <tr>
                    <td style="padding: 0px 20px 0px 18px;">
                        <label for="">Email:                            
                            @if(!empty($data['email']))
                                <span>{{ $data['email'] }}</span>
                            @endif
                        </label>
                    </td>
                </tr>        
               
                <tr>
                    <td style="padding: 0px 20px 0px 18px;">
                        <label for="">Message:</label>
                        @if(!empty($data['message']))
                            <p>{{ $data['message'] }}</p>
                        @endif
                    </td>
                </tr>         
            </tbody>
        </table>


    </center>
</body>

</html>
