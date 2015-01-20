<?php ?>
<a class="cssbutton" href="http://localhost/myauth?q=oauth2%2Fauthorize&client_id=myclient&response_type=code&grant_type=authorization_code&state=profile&scope=user_profile">Login with drupal site</a>
<style type="text/css">
    .cssbutton{
        background-color: #d1ec4c;
        border: 2px #d1ec4c outset;
        padding: 1px 4px;
        color: black;
        text-decoration: none;
        font: bold 90% "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
        width: 100%; 
        font-size: 40px;
    }

    .cssbutton:hover{
        border-style: inset;
        background-color: #e3f48e;
        padding: 2px 3px 0 5px; /*shift text 1px to the right and down*/
    }
    body{
        text-align: center;
    }
</style>