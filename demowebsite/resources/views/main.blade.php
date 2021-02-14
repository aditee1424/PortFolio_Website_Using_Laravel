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
                        <form method="post" action="/maincreate" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                        <button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:10%"><a href = 'http://localhost:8000/mainupdate' style="text-decoration:none">Update</a></button>
                      
                        <button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px"><a href = '/maindelete' style="text-decoration:none">Delete</a></button>
                        <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                          
                              <br><br><label for="title">Title:</label>
                              <input type="text" name="title" style="width:100px;margin-right:20px;margin-left:15px">

                              <br><br><label for="jobs">Jobs:</label>
                              <input type="text" name="jobs" style="width:100px;margin-right:20px;margin-left:11px">

                              <br><br><label for="myimage">Image:</label>
                    <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:90px">
                             

                        </form>
                        <table border='1'>
                                    <tr>
                                          <th>TITLE</th>
                                          <th>JOBS</th>
                                          <th style="width:300%">IMAGE</th>
                                     
                                    </tr>
                                

                                    @foreach ($portfolioimage as $portfolioimage)
                                    <tr>
                                          <td style="width:60%; height:60%">{{ $portfolioimage->Title }}</td>
                                          <td style="width:60%; height:60%">{{ $portfolioimage->Jobs }}</td>
                                         
                                          <td style="width:60%; height:60%">  <?php echo '<img src="data:image/png;base64,' . $portfolioimage->Image . '" style="width:300%;height:20%"/>' ?></td>
                                   
                                           
                                    </tr>
                                    @endforeach
                              </table>
                  </div>
            </div>

      </div>
</body>

</html>