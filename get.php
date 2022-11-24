<html>

<head>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        function success() {
            Swal.fire('Registered Successfully', '', 'success');
        }

        function wrong() {
            Swal.fire('OOPS!', 'Some member was already taken.', 'error');
        }
    </script>
    <?php
    $team_name = $_POST["team_name"];
    $team_no = $_POST["phone_number"];
    $player_name1  = $_POST["player1"];
    $player_jntu1 = $_POST["player1_jntu"];
    $player_section1 = $_POST["player1_section"];
    $player_name2  = $_POST["player2"];
    $player_jntu2 = $_POST["player2_jntu"];
    $player_section2 = $_POST["player2_section"];
    $player_name3  = $_POST["player3"];
    $player_jntu3 = $_POST["player3_jntu"];
    $player_section3 = $_POST["player3_section"];
    $player_name4  = $_POST["player4"];
    $player_jntu4 = $_POST["player4_jntu"];
    $player_section4 = $_POST["player4_section"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "acmgmrit";


    require_once './config/db.php';


    // Checking for any redundancy
    $check = "SELECT * FROM `details` WHERE jntu ='$player_jntu1' OR jntu ='$player_jntu2' OR jntu ='$player_jntu3' OR jntu ='$player_jntu4'";
    $findout = mysqli_query($conn, $check);
    $count = 0;
    while ($row = $findout->fetch_assoc()) {
        $count = $count + 1;
    }
    echo "<span class='regi'><p>Please check team mates and register here: <br><a href='index.php'>Register</a></p></span>";
    if ($count == 0) {
        $stmt = $conn->prepare("INSERT INTO details (team_name,team_no, name,jntu,section) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $team_name, $team_no, $player_name1, $player_jntu1, $player_section1);
        $stmt->execute();
        $stmt->bind_param("sssss", $team_name, $team_no, $player_name2, $player_jntu2, $player_section2);
        $stmt->execute();
        $stmt->bind_param("sssss", $team_name, $team_no, $player_name3, $player_jntu3, $player_section3);
        $stmt->execute();
        $stmt->bind_param("sssss", $team_name, $team_no, $player_name4, $player_jntu4, $player_section4);
        $stmt->execute();
        echo '<script>success();</script>';
        $arr = array($team_name, $player_name1, $player_name2, $player_name3, $player_name4);
        $arra = json_encode($arr);
        header("location:final.php?names=" . $arra);
    } else {
        echo '<script>wrong();</script>';
    }
    ?>
    <style>
        .regi {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f2709c;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ff9472, #f2709c);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ff9472, #f2709c);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</body>

</html>