<?php session_start();

class chatty_app
{
    // function for connection
    function conn()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'chatty_app');
        return $connect;
    }
    // connection end here

    // function for login
    function loggin()
    {
        if (isset($_POST['btn'])) {
            $a = $_POST['email'];
            $b = $_POST['pwd'];

            $sql = "SELECT * FROM `users` WHERE email = '$a' AND password = '$b'";
            $query = mysqli_query($this->conn(), $sql);
            $count = mysqli_num_rows($query);

            if ($count == 1) {
                echo "<script>window.location.href='index.php'</script>";
                $_SESSION['loggedin'] = $_POST['email'];
            } else {
                echo "<script>alert('Sorry Some Went Wrong')</script>";
            }
        }
    } //login function end here

    //function for live user data
    function livvveee()
    {
        $a = $_SESSION['loggedin'];
        $sql = "SELECT * FROM `users` WHERE email = '$a'";
        $query = mysqli_query($this->conn(), $sql);
        return $query;
    } // this funciton end here

    // function for post to database
    function posted()
    {
        if (isset($_POST['post_btn'])) {
            $a = $_POST['post'];
            foreach ($this->livvveee() as $logg) {
                $admin = $logg['id'];
            }
            $sql = "INSERT INTO `post`(`ppost`, `ppostBY`) VALUES ('$a','$admin')";
            $query = mysqli_query($this->conn(), $sql);
            if (!$query) {
                echo "<script>alert('Sorry Some Went Wrong')</script>";
            } else {
                echo "<script>alert('Posted Successfully')</script>";
            }
        }
    } // function end here


    // fucntion to get all post on home page as a timeline clone to facebook
    function timelinepost()
    {
        $sql = "SELECT p.pid as postid, p.ppost as content, p.ppostBY , p.ppostDT,u.id, u.name as postby, u.email FROM post p INNER JOIN users u ON u.id = p.ppostBY ORDER by Rand()";
        $query = mysqli_query($this->conn(), $sql);
        return $query;
    }

    //function for post details
    function post_detail()
    {
        $a = $_GET['postid'];
        // echo $a;
        $sql = "SELECT p.pid as postid, p.ppost as content, p.ppostBY , p.ppostDT,u.id, u.name as postby, u.email FROM post p INNER JOIN users u ON u.id = p.ppostBY WHERE p.pid = '$a'";
        $query = mysqli_query($this->conn(), $sql);
        return $query;
    }
}

// object 
$object = new chatty_app;
