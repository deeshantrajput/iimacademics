<!DOCTYPE html>
<html lang="en" ng-app="IIM-academics">
    <head>
        <title>IIM Academics</title>
        <link rel="shortcut icon" href="<?= base_url(); ?>css/images/logo.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
        <script src="<?= base_url(); ?>css/anim.js"></script>
        <link href="<?= base_url(); ?>css/search.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>css/footer.css">
        <style>

            .carousel-control.left,.carousel-control.right{
                background-image:none;
                margin-top:10%;
                width:5%;
            }
            .shade img {
                filter: gray; /* IE6-9 */
                -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
                -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
                box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
                margin-bottom: 20px;
            }
            .shade img:hover {
                filter: none; /* IE6-9 */
                -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
            }
        </style>
        <script>
            $(document).ready(function() {
                $("#name").autocomplete({
                    source: "<?php echo site_url('Pages/autosearch/?'); ?>"
                });
            });

            $(document).ready(function() {
                $('#location').autocomplete({
                    source: "<?php echo site_url('Pages/autosearchloc/?'); ?>"
                });
            });
             $(document).ready(function loaddoc() {
                console.log('PHP: ".implode(',', $records)."');
               });
           
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="margin-right: 0px">

        <nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 30px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="<?= base_url(); ?>pages/view">IIM Academics</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>pages/aboutus">ABOUT</a></li>
                        <li><a href="<?php echo base_url(); ?>pages/services">SERVICES</a></li>
                        <li><a href="<?php echo base_url(); ?>pages/projects">PROJECTS</a></li>
                        <li><a href="<?php echo base_url(); ?>pages/contacts">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div id="search-bar">  
                <form role="form" class="form-inline " method="post" action="<?= base_url();?>Pages/collegesearch/fees/asc">
                    <div class="form-group">
                        <input type="text" id="location" autocomplete="off" name="location" class="form-control" size="30" placeholder="Enter location">
                    </div>
                    <div class="form-group">
                        <input type="text" id="name" autocomplete="off" name="name" class="form-control" size="50" placeholder="Enter College">        
                    </div>
                    <div class="form-group">
                        <select  name="course" class="form-control">
                            <option value="">Select Course</option> 
                            <option value="B.TECH">B.TECH</option> 
                            <option value="M.TECH">M.TECH</option> 
                            <option value="MBA">MBA</option> 
                            <option value="PHD">PHD</option>
                            <option value="Diploma">Diploma</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger">Search</button>
                </form>
            </div> 

        </nav>
