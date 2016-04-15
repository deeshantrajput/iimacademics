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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
        <script src="<?= base_url(); ?>css/anim.js"></script>
        <link href="<?= base_url(); ?>css/search.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>css/footer.css">
        <script>
            $(document).ready(function() {
                $("#name").autocomplete({
                    source: "<?php echo site_url('Pages/autosearch/?');?>"
                });
                $("#location").autocomplete({
                    source: "<?php echo site_url('Pages/autosearchloc/?');?>"
                });
         });
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="margin-right: 0">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>pages/view">IIM Academics</a>
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
        </nav>
