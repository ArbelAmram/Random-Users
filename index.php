<?php include_once("script.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
                crossorigin="anonymous">
        </script>
        
        <!-- AJAX and JQUERY -->
        <script>
                $(document).ready(function() {
                        $("#btn").click(function() {
                                $("#test").load("get.php");
                        });
                });
        </script>
</head>
<body>
        <div class="content">
                <h1>Random User List</h1>
                <br/>
                <button id="btn">Click to reload users</button> 
                <br/><br/>

                <!-- DISPLAY DB VIEW -->
                <table border='1'>
                        <tr id="test" />
                </table>
        </div>
</body>
</html>