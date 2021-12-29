<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #BAB2B5;
        }

        .tablebox {
            margin: 40px auto;
            margin-top: 80px;
        }

        .tablerow {
            display: table;
            width: 80%;
            margin: 10px auto;
            background: transparent;
            padding: 12px 0;
            color: black;
            font-size: 20px;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 50, 0.3);
        }

        .tablecell {
            display: table-cell;
            width: 30%;
            text-align: center;
            padding: 4px 0;
            border-right: 1px solid black;
            vertical-align: middle;
        }

        .tablehead {
            background: #FBEDE0;
            box-shadow: none;
            color: black;
            font-weight: bold;
        }

        .tablehead .tablecell {
            border-right: none;
        }

        .lastcell {
            border-right: none;
        }

        .firstcell {
            text-align: left;
            padding-left: 10px;
        }

        .navbar {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.4);
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            width: 100%;
        }

        .navbar a {
            float: right;
            display: block;
            color: #000000;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            background: #fdfbfd;
            color: black;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="home.html">Home</a>
    </div>
    <div class="tablebox">
        <div class="tablerow tablehead">
            <div class="tablecell firstcell">
                <p>Candidate Name</p>
            </div>
            <div class="tablecell">
                <p>Votes</p>
            </div>
            <div class="tablecell">
                <p>Percentages</p>
            </div>
        </div>
        <div class="tablebox">
            <div class="tablerow">
                <div class="tablecell firstcell">
                    <p>Sanvy</p>
                </div>
                <div class="tablecell">
                    <p>
                    <?php
                    $dbhost="localhost";
                    $dbusername="root";
                    $dbpassword="";
                    $dbname="user_data";
                    $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    $sql="select count(vote) as total from login_info where vote='sanvy'";
                    $result=mysqli_query($conn,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo $num_rows;
                    ?>
                    </p>
                </div>
                <div class="tablecell lastcell">
                    <p></p>
                </div>
            </div>
        </div>
           <div class="tablebox">
            <div class="tablerow">
                <div class="tablecell firstcell">
                    <p>Adi</p>
                </div>
                <div class="tablecell">
                    <p><?php
                    $dbhost="localhost";
                    $dbusername="root";
                    $dbpassword="";
                    $dbname="user_data";
                    $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    $sql="select count(vote) as total from login_info where vote='adi'";
                    $result=mysqli_query($conn,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo $num_rows;
                    ?></p>
                </div>
                <div class="tablecell lastcell">
                    <p></p>
                </div>
            </div>
        </div>
           <div class="tablebox">
            <div class="tablerow">
                <div class="tablecell firstcell">
                    <p>Dhruv</p>
                </div>
                <div class="tablecell">
                    <p><?php
                    $dbhost="localhost";
                    $dbusername="root";
                    $dbpassword="";
                    $dbname="user_data";
                    $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    $sql="select count(vote) as total from login_info where vote='dhruv'";
                    $result=mysqli_query($conn,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo $num_rows;
                    ?></p>
                </div>
                <div class="tablecell lastcell">
                    <p></p>
                </div>
            </div>
        </div>
           <div class="tablebox">
            <div class="tablerow">
                <div class="tablecell firstcell">
                    <p>Shreya</p>
                </div>
                <div class="tablecell">
                    <p><?php
                    $dbhost="localhost";
                    $dbusername="root";
                    $dbpassword="";
                    $dbname="user_data";
                    $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    $sql="select count(vote) as total from login_info where vote='shreya'";
                    $result=mysqli_query($conn,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo $num_rows;
                    ?></p>
                </div>
                <div class="tablecell lastcell">
                    <p></p>
                </div>
            </div>
        </div>
           <div class="tablebox">
            <div class="tablerow">
                <div class="tablecell firstcell">
                    <p>Aryan</p>
                </div>
                <div class="tablecell">
                    <p><?php
                    $dbhost="localhost";
                    $dbusername="root";
                    $dbpassword="";
                    $dbname="user_data";
                    $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    $sql="select count(vote) as total from login_info where vote='Aryan'";
                    $result=mysqli_query($conn,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo $num_rows;
                    ?></p>
                </div>
                <div class="tablecell lastcell">
                    <p></p>
                </div>
            </div>
        </div>
        
        

</body>

</html>