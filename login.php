<?php

    include("connection.php");

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql = "select * from test where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if(count==1){
            header("location:welcome.php");

        }
        else
            echo `<script>
                windows.location.href = "index.php";
                alert("login faild")
                <script>`;
    }

?>