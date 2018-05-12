<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Joshua's Profile Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        
    }

    .othertop{margin-top:10px;}
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>DATE {{date('Y-m-d')}}</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <label id="Name (Full name)" name="Name (Full name)" type="text" class="form-control input-md">Joshua Jeffrey Yapching</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-birthday-cake"></i>
                                    </div>
                                    <label id="Date Of Birth" name="Date Of Birth" type="text" class="form-control input-md">July 20, 1995</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Gender">Gender</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-male"></i>
                                    </div>
                                    <label id="gender" name="gender" type="text" class="form-control input-md">Male</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Marital Status">Marital Status</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-heart-o"></i>
                                    </div>
                                    <label id="marital_status" name="marital_status" type="text" class="form-control input-md">Single</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Temporary Address">Temporary Address</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-home" style="font-size:20px;"></i>
                                    </div>
                                    <textarea>71 - h Gen. Echaves Street Lorega San Miguel Cebu City</textarea> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Primary Occupation">Primary Occupation</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-briefcase"></i>
                                    </div>
                                    <label id="Primary Occupation" name="Primary Occupation" type="text" class="form-control input-md">Web Developer</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Skills">Programming Language</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <label id="Skills" name="Skills" type="text" class="form-control input-md">PHP, Javascript</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                    </div>
                                    <label id="Phone number " name="Phone number " type="text" class="form-control input-md">0939-506-2686</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <label id="Email Address" name="Email Address" type="text" class="form-control input-md">joshyapching@gmail.com</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="https://lh3.googleusercontent.com/-XOUk5FV7OeY/WpikWjKCY4I/AAAAAAAAAGY/Ai_FowB6N-8KakmAKKmZRn-yp6UZrE0xQCEwYBhgL/w139-h140-p/FaceApp_1519197237163%255B1%255D.jpg" class="img-responsive img-thumbnail ">
            </div>


        </div>
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
