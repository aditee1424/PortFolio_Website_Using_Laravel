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
                <form method="post" action="/workedit/<?php echo $workexp[0]->WorkId; ?>" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                <button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px; margin-left:10%">Update</button>
                

                    <br><br> <label for="workid">Work ID:</label>
                    <input type="number" name="workid" value = '<?php echo $workexp[0]->WorkId; ?>' min="11" style="width:95px;height:40px;margin-right:20px;margin-left:58px;border-radius:20px">
                   
                   
                    <br><br><label for="startm">Start Month:</label>
                    <input type="text" name="startm" value = '<?php echo $workexp[0]->StartMonth; ?>' pattern="(jan|JAN|feb|FEB|march|MARCH|april|APRIL|may|MAY|jun|JUNE|july|JULY|aug|AUG|sept|SEPT|oct|OCT|nov|NOV|dec|DEC)" style="width:100px;margin-right:20px;margin-left:27px">

                    <br><br><label for="starty">Start Year:</label>
                    <input type="text" name="starty" value = '<?php echo $workexp[0]->StartYear; ?>' pattern="(?:19|20)\d{2}" style="width:100px;margin-right:20px;margin-left:46px">

                    <br><br><label for="endm">End Month:</label>
                    <input type="text" name="endm" value = '<?php echo $workexp[0]->EndMonth; ?>' pattern="(jan|JAN|feb|FEB|march|MARCH|april|APRIL|may|MAY|jun|JUNE|july|JULY|aug|AUG|sept|SEPT|oct|OCT|nov|NOV|dec|DEC)" style="width:100px;margin-right:20px;margin-left:35px">

                    <br><br><label for="endy">End Year:</label>
                    <input type="text" name="endy" value = '<?php echo $workexp[0]->EndYear; ?>' pattern="(?:19|20)\d{2}" style="width:100px;margin-right:20px;margin-left:54px">

                    <br><br><label for="company">Company:</label>
                    <input type="text" name="company" value = '<?php echo $workexp[0]->Company; ?>' style="width:100px;margin-right:20px;margin-left:50px">

                    <br><br><label for="pos">Position:</label>
                    <input type="text" name="pos" value = '<?php echo $workexp[0]->Position; ?>' style="width:100px;margin-right:20px;margin-left:63px">

                    <br><br><label for="desc">Description:</label>
                    <input type="text" name="desc" value = '<?php echo $workexp[0]->Description; ?>' style="width:100px;margin-right:20px;margin-left:41px">

                </form>

                <table border='1' style="margin-right:20%;margin-left:-20%">
                                    <tr>
                                          <th>WORKID</th>
                                          <th>START MONTH</th>
                                          <th>START YEAR</th>
                                          <th>END MONTH</th>
                                          <th>END YEAR</th>
                                          <th>COMPANY</th>
                                          <th>POSITION</th>
                                          <th>DESCRIPTION</th>
                                          <th>DELETE</th>
                                          <th>UPDATE</th>
                                     
                                    </tr>
                                

                                    @foreach ($workexp as $workexp)
                                    <tr>
                                          <td>{{ $workexp->WorkId }}</td>
                                          <td>{{ $workexp->StartMonth }}</td>
                                          <td>{{ $workexp->StartYear }}</td>
                                          <td>{{ $workexp->EndMonth }}</td>
                                          <td>{{ $workexp->EndYear }}</td>
                                          <td>{{ $workexp->Company }}</td>
                                          <td>{{ $workexp->Position }}</td>
                                          <td>{{ $workexp->Description }}</td>
                                
                                    @endforeach
                              </table>
            </div>
        </div>
    </div>
</body>

</html>