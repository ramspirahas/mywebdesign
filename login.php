<?php
    session_start();
    include("logconnection.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        if(isset($_POST['username']) && isset($_POST['password'])) // Check if username and password are set
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!empty($username) && !empty($password) && !is_numeric($username))
            {
                $query = "SELECT * FROM signup WHERE username='$username' LIMIT 1";
                $result = mysqli_query($conn, $query);

                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: Development.php");
                        die;
                    }
                    else
                    {
                        echo '<script>
                        alert("Wrong username or password");
                        window.location.href = "index.php";
                        </script>';
                    }
                }
                else
                {
                    echo '<script>
                        alert("Wrong username or password");
                        window.location.href = "index.php";
                        </script>';
                }
            }
            else
            {
                echo '<script>
                        alert("Username or password not set");
                        window.location.href = "index.php";
                        </script>';
            }
        }
        else
        {
            echo '<script>
                        alert("Username or password not set");
                        window.location.href = "index.php";
                        </script>';
        }
    }
?>
