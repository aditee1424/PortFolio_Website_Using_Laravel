<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HOME</title>
<link rel="stylesheet" href="<?php echo asset('css/Portfolio1.css')?>" type="text/css">
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
                        <form method="post" action="/skillscreate" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      
                            
                              <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>
                              
                              <br><label for="skillid">SkillId:</label>
                              <input type="number" name="skillid"  min="1"  style="width:100px;height:30px;margin-right:20px;margin-left:95px;border-radius:20px">
                              <br> <label for="lang">Language:</label>
                              <input type="text" name="lang" max="100" style="width:100px;;height:30px;margin-right:20px;margin-left:65px;">
                              <br><label for="per">Percentage:</label>
                              <input type="number" name="per" style="width:100px;height:30px;margin-right:20px;margin-left:55px;border-radius:20px">

                  

                            </form>
                            </div>
                         
                            <table border='1'>
                                    <tr>
                                          <th>USERID</th>
                                          <th>SKILLID</th>
                                          <th>LANGUAGE</th>
                                          <th>PERCENTAGE</th>
                                     
                                    </tr>
                                

                                    @foreach ($skills as $skills)
                                    <tr>
                                          <td>{{ $skills->UserId }}</td>
                                          <td>{{ $skills->SkillId }}</td>
                                          <td>{{ $skills->Language }}</td>
                                          <td>{{ $skills->Percentage}}</td>
                                          <td><button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px"><a href = '/skillsdestroy/{{$skills->SkillId}}' style="text-decoration:none">Delete</a></button></td>
                                          <td><button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:10%"><a href = '/skillsupdate/{{$skills->SkillId}}' style="text-decoration:none">Update</a></button></td>
                                    </tr>
                                    @endforeach
                              </table>
               
            </div>
           
      </div>
</body>

</html>