<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME</title>
<link rel="stylesheet" href="<?php echo asset('css/Portfolio1.css') ?>" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700' rel='stylesheet'>

<head>
</head>

<body>
    <div id="wrapperadmin">
        <header class="contactheader" style="margin-bottom:10%">
            <nav class="navpages">
                <ul>
                    <li style="padding-right: 100px"><a href="http://localhost:8000/Home"> ADITEE DAKHANE</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/main">HOME</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/admin">ABOUT</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/skills">SKILLS</a> </li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/portfolio">PORTFOLIO</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/workexp">EXPERIENCE</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/edu">EDUCATION</a> </li>
                    <li style="padding-right: 5px"><a href="http://aditee1411.uta.cloud/">BLOG</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/prices">HIREME</a></li>
                    <li style="padding-right: 5px"><a href="http://localhost:8000/user">USERLIST</a></li>
                </ul>

            </nav>

        </header>
        <div class="contactcontainer">
            <div class="row">
                <form method="post" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                    

                </form>
            </div>
        </div>
        <table border='1' style="margin-right:20%;margin-left:35%;margin-top:-50%">
            <tr>

               
                <th>NAME</th>
                <th>SUBJECT</th>
                <th>MESSAGE</th>



            </tr>


            @foreach ($usercontact as $usercontact)
            <tr>
               
                <td>{{$usercontact->Name}}</td>
               <td> {{$usercontact->Subject}}</td>
               <td> {{$usercontact->Message}}</td>
               
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>