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
                <form method="post" action="/portfoliocreate" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); width:120%">
                    
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">  
                    <button name="add" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Add</button>

                    <br><br> <label for="projectid">Project ID:</label>
                    <input type="number" name="projectid" min="1"  style="width:95px;height:40px;margin-right:20px;margin-left:65px;border-radius:20px">
                    

                    <br><br><label for="projecttitle">Project Title:</label>
                    <input type="text" name="projecttitle" style="width:100px;margin-right:20px;margin-left:48px">

                    <br><br><label for="projecttype">Project Type:</label>
                    <input type="text" name="projecttype" style="width:100px;margin-right:20px;margin-left:41px">

                  
                    <br><br><label for="myimage">Image:</label>
                    <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:90px">
                   
                   

                </form>
            </div>
            <table border='1'>
                                    <tr>
                                          <th>PROJECTID</th>
                                          <th>TTITLE</th>
                                          <th>TYPE</th>
                                          <th>IMAGE</th>
                                          <th>DELETE</th>
                                          <th width="170%">UPDATE</th>
                                     
                                    </tr>
                                

                                    @foreach ($portfolio as $portfolio)
                                    <tr>
                                          <td>{{ $portfolio->ProjectId }}</td>
                                          <td>{{ $portfolio->ProjectTitle }}</td>
                                          <td>{{ $portfolio->ProjectType }}</td>
                                          <td width="100px">  <?php echo '<img src="data:image/png;base64,' . $portfolio->Image . '" style="width:50%;height:20%;margin-left:20%"/>' ?></td>
                                          <td><button name="delete" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px"><a href = '/portfoliodestroy/{{$portfolio->ProjectId}}' style="text-decoration:none">Delete</a></button></td>
                                          <td><button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:10%"><a href = '/portfolioupdate/{{$portfolio->ProjectId}}' style="text-decoration:none">Update</a></button></td>
                                    </tr>
                                    @endforeach
                              </table>
        </div>
        
       
    </div>
</body>

</html>