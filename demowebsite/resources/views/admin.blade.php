<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo asset('css/Portfolio1.css') ?>" type="text/css">

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
                        <form method="post" action="/create" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                                 <button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:10%"><a href = 'http://localhost:8000/adminupdate' style="text-decoration:none">Update</a></button>
                      
                              <button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px"><a href = '/delete' style="text-decoration:none">Delete</a></button>
                              <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                              <br><br> <label for="age">Age:</label>
                              <input type="number" name="age" min="18" max="99" style="width:95px;height:40px;margin-right:20px;margin-left:65px;border-radius:20px">
                              <br><br><label for="Email">Email:</label>
                              <input type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" style="width:100px;margin-right:20px;margin-left:48px">

                              <br><br><label for="phone">Phone:</label>
                              <input type="text" name="phone" pattern="^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$" style="width:100px;margin-right:20px;margin-left:41px">
                              <small>Format: 123-456-7890</small>

                              <br><br><label for="address">Address:</label>
                              <input type="text" name="address" pattern="^(\d+) ?([A-Za-z](?= ))? (.*?) ([^ ]+?) ?((?<= )APT)? ?((?<= )\d*)?$" min="5" max="100" style="width:100px;margin-right:20px;margin-left:30px">

                              <br><br><label for="language">Language:</label>
                              <input type="text" name="language" style="width:100px;margin-right:20px;margin-left:15px">

                              <br><br><label for="aboutinfo">About_Info:</label>
                              <input type="text" name="aboutinfo" style="width:100px;margin-right:20px;margin-left:11px">

                              

                        </form>

                        <table border='1'>
                                    <tr>
                                    <th>USERID</th>
                                          <th>AGE</th>
                                          <th>EMAIL</th>
                                          <th>PHONE</th>
                                          <th>ADDRESS</th>
                                          <th>LANGUAGE</th>
                                          <th>ABOUT_INFO</th>
                                    </tr>
                                

                                    @foreach ($viewoverall as $user)
                                    <tr>
                                    <td>{{ $user->UserId }}</td>
                                          <td>{{ $user->Age }}</td>
                                          <td>{{ $user->Email }}</td>
                                          <td>{{ $user->Phone }}</td>
                                          <td>{{ $user->Address }}</td>
                                          <td>{{ $user->Language }}</td>
                                          <td>{{ $user->About_Info }}</td>
                                    </tr>
                                    @endforeach
                              </table>
                  </div>
            </div>

      </div>
</body>

</html>