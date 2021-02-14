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

            </nav>

        </header>
        <div class="contactcontainer">
            <div class="row">
                <form method="post" action="/pricesedit/<?php echo $prices[0]->ServiceId; ?>" enctype="multipart/form-data" style="border:whitesmoke solid;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);width:120%">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                    <button name="update" type="submit" style="width:80px; height:40px; padding-bottom:5px; margin-right:5px">Update</button>

                    <br><br> <label for="serviceid">Service ID:</label>
                    <input type="number" name="serviceid" value = '<?php echo $prices[0]->ServiceId; ?>' min="31"  style="width:95px;height:40px;margin-right:20px;margin-left:58px;border-radius:20px">
          
                    <br><br><label for="price">Price:</label>
                    <input type="number" name="price" value = '<?php echo $prices[0]->Price; ?>' min="1" max="50000" style="width:95px;height:40px;margin-right:20px;margin-left:95px;border-radius:20px">

                    <br><br><label for="jname">Job Name:</label>
                    <input type="text" name="jname" value = '<?php echo $prices[0]->JobName; ?>' style="width:100px;margin-right:20px;margin-left:49px">

                    <br><br><label for="service1">Service1:</label>
                    <input type="text" name="service1" value = '<?php echo $prices[0]->Service1; ?>' style="width:100px;margin-right:20px;margin-left:67px">

                    <br><br><label for="service2">Service2:</label>
                    <input type="text" name="service2" value = '<?php echo $prices[0]->Service2; ?>'  style="width:100px;margin-right:20px;margin-left:64px">

                    <br><br><label for="service3">Service3:</label>
                    <input type="text" name="service3" value = '<?php echo $prices[0]->Service3; ?>'  style="width:100px;margin-right:20px;margin-left:64px">

                    <br><br><label for="service4">Service4:</label>
                    <input type="text" name="service4" value = '<?php echo $prices[0]->Service4; ?>'  style="width:100px;margin-right:20px;margin-left:64px">

                    <br><br><label for="link">Link:</label>
                    <input type="text" name="link" value = '<?php echo $prices[0]->Link; ?>' style="width:100px;margin-right:20px;margin-left:93px">

                    <br><br><label for="myimage">Image:</label>
                    <input type="file" name="myimage" style="width:100px;margin-right:20px;margin-left:90px">
                </form>
                <table border='1' style="margin-right:20%;margin-left:-30%">
                                    <tr>
                                          
                                          <th>SERVICEID</th>
                                          <th>PRICE</th>
                                          <th>JOBNAME</th>
                                          <th>SERVICE1</th>
                                          <th>SERVICE2</th>
                                          <th>SERVICE3</th>
                                          <th>SRVICE4</th>
                                          <th>LINK</th>
                                          <th>IMAGE</th>
                                        
                                          
                                     
                                    </tr>
                                

                                    @foreach ($prices as $prices)
                                    <tr>
                                          <td>{{ $prices->ServiceId }}</td>
                                          <td>{{ $prices->Price }}</td>
                                          <td>{{ $prices->JobName }}</td>
                                          <td>{{ $prices->Service1 }}</td>
                                          <td>{{ $prices->Service2 }}</td>
                                          <td>{{ $prices->Service3 }}</td>
                                          <td>{{ $prices->Service4 }}</td>
                                          <td>{{ $prices->Link }}</td>
                                          <td style="width:100%">  <?php echo '<img src="data:image/png;base64,' . $prices->Image . '" style="width:50%;height:50%;margin-left:20%"/>' ?></td>
                                        
                                    </tr>
                                    @endforeach
                              </table>
            </div>
        </div>
        
    </div>
</body>

</html>