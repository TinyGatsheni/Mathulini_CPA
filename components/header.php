<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <title>CPA</title>
</head>

<body>
    <style>
        body {
            /* background-image: url('<?php echo $_SERVER['SERVER_NAME'] ?>assets/img/kazuend-p4orVxNl5Ko-unsplash.jpg'); */
            background-image: url('assets/img/joshua-stannard.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.507);
            z-index: -1;
        }

        .header {
            font-size: 30pt;
            color: white;
            font-weight: bolder;
            text-align: center;
            z-index: 2;
            margin-top: 200px;
            text-shadow: 0px 7px 13px #000000;
            ;
        }

        .form-wraaper {
            margin: 55px auto;
            padding: 59px;
            width: 38%;
            background-color: rgba(204, 204, 204, 0.507);
            border-radius: 20px;
            z-index: 2;
        }

        .form-wraaper_login {
            margin: 50px auto;
            padding: 59px;
            width: 38%;
            height: 313px;
            background-color: rgba(204, 204, 204, 0.507);
            /* border-radius: 20px; */
            z-index: 2;
        }

        input,
        select {
            margin: 15px 0;
        }


        .btn_login {
            width: 100%;
            background: #1e7e34;
            ;
            font-weight: 900;
            transition: 500ms;
            border: 0;
            padding: 5px;
            border-radius: 5px;
            margin-top: 0;
            color: white;
        }

        .btn_login:hover {
            width: 100%;
            transition: 500ms;
        }

        .main-header {
            background: green;
            width: 100%;
            height: 70px;
        }

        .sidebar {
            float: left;
            width: 25%;
            height: 100vh;
            background: #279b2d;
        }

        .right-content {
            float: right;
            width: 75%;
            height: 100vh;
        }

        .content {
            padding: 20px;
            width: 100%;
            height: 89%;
            overflow: auto;
        }

        .projectName {
            text-align: center;
            padding: 15px;
            font-size: 20pt;
            font-weight: 600;
            color: white;
        }

        ul.menu-list {
            list-style: none;
            padding: 0;
        }

        li.menu-item {
            padding: 16px;
            border-top: 1px solid black;
            font-size: 13pt;
            transition: 200ms;
        }

        li.menu-item:hover {
            padding: 16px;
            border-top: 1px solid black;
            font-size: 13pt;
            background: #101d10;
            color: white;
            cursor: pointer;
            transition: 200ms;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .btn-wrapper {
            text-align: right;
        }

        .main-header {
            text-align: right;
            padding: 15px 10px;
        }
    </style>