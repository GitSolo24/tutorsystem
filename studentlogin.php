<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inter school tutoring system</title>
    <link rel="stylesheet" href="../Css/tutor.css" />
    <!--   <link rel="navigationbar" href="../Css/navbar.css" />   -->
    <style>
        body {
            background-color: #111;
            ;
        }

        /* NAVIGATION BAR CSS */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #111;
            position: fixed;
            padding: 6px 8px 6px 16px;
            font-size: 20px;
            display: block;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #800020;
        }

        .active {
            background-color: #04aa6d;
        }

        /* LOGIN CSS */

        .container {
            float: right;
            margin-right: 375px;
            margin-top: 10px;

        }

        .container button {
            float: right;
            padding: 2px;
            margin-top: 8px;
            margin-right: 16px;
            background: #808080;
            color: #fff;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        input[type="username"],
        input[type="password"] {
            padding: 2px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            width: 150px;
            cursor: pointer;
            float: left;
        }

        /* SIDE PANEL CSS */

        .sidenav {
            height: 90%;
            width: 160px;
            position: fixed;
            z-index: -1;
            top: -3;
            left: 0;
            bottom: 1px;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #800020;
            border: solid 1px;
        }

        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            margin-bottom: 20px;
            margin-top: 110px;
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .logo img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100px;
            position: fixed;
        }

        /* DASHBOARDS */
        .col-sm-9 {
            border: solid 1px;
            margin-left: 200px;
            /*  margin-bottom: 20px;*/
            margin-top: 75px;
        }

        .dash {
            border: solid;
            background-color: white;
        }
    </style>
    <script>

    </script>
</head>

<body>
    $conn;



    <div>
        <div>
            <!--   <div class="logo">
        <a>
          <img src="../images/Ists.png" alt="website logo" />
        </a>
      </div> -->
            <nav class="navi">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">STUDENT</a></li>
                    <li><a href="">TUTOR</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li> <br> </li>
                    <li> </li>
                    <li> </li>


                    <!-- log in into the navigation bar-->
                    <div class="container">
                        <form action="login.php">
                            <!-- need to create a login.html page for the login for students and tutors-->
                            <input type="username" name="email" placeholder="USERNAME" />
                            <input type="password" name="pass" placeholder="PASSWORD" />
                            <button type="submit">LOGIN</button>
                        </form>

                        <!-- side panel-->
                        <div id="mySidenav" class="sidenav">
                            <a href="#about">DASHBOARD</a>
                            <a href="#services">FIND A TUTOR</a>
                            <a href="#clients">INBOX</a>
                            <a href="#contact">CALENDAR</a>
                            <a href="#logout">LOG OUT</a>

                            <div>
                                <div class="logo">
                                    <a>
                                        <img src="../images/Ists.png" alt="website logo" />
                                    </a>
                                </div>

                            </div>
                        </div>
                </ul>
            </nav>

            <hr />
        </div>

        <!-- side panel-->
        <div class="sidenav">
            <a href="#about">DASHBOARD</a>
            <a href="#services">FIND A TUTOR</a>
            <a href="#clients">INBOX</a>
            <a href="#contact">CALENDAR</a>
            <a href="#logout">LOG OUT</a>
        </div>

    </div>

    <!-- body of the page: dashboard-->
    <div class="dash">
        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
            </div>
        </div>

    </div>

</body>


</html>