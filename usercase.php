<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Court Case | Find your details here</title>
    <link rel="shortcut icon" href="https://lawware.co.uk/wp-content/uploads/2021/08/balance.svg">
    <link rel="stylesheet" href="usercase.css">
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img src="https://lawware.co.uk/wp-content/uploads/2021/08/balance.svg"></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a class="active" href="home.html">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li class="services">
                    <a href="">SERVICES</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="usercase.html">View Cases</a></li>
                    </ul>
                </li>
                <li><a href="index.php">LOGOUT</a></li>
            </div>
        </ul>
    </nav>
    <br>
    <br>

    <div class="userinfo">
        <table>
            <tr>
                <th>suitno</th>
                <th>plaintiff</th>
                <th>defendant</th>
                <th>nofcase</th>
                <th>stage</th>
                <th>date</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "ecms");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            //change table names and attributes
            
            $sql = "SELECT suitno, plaintiff, defendant, nofcase, stage, date FROM registration";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
            echo "<tr><td>" . $row["suitno"]. "</td><td>" . $row["plaintiff"] . "</td><td>"
            . $row["defendant"]. "</td><td>" . $row["nofcase"] . "</td><td>" . $row["stage"] . "</td><td>" . $row["date"] . "</td><tr>";
            
            }
            
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- footer  -->
    <footer>
        <div class="footer">
            <div class="row">
                EADALAT Copyright © 2023 - All rights reserved || Designed By:ETRX_23
            </div>
        </div>
    </footer>
</body>

</html>