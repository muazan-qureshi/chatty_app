table for users
CREATE TABLE users ( id int AUTO_INCREMENT PRIMARY KEY, name varchar(50), email varchar(50), password varchar(50) )


table for post
CREATE TABLE post
(
	pid int AUTO_INCREMENT PRIMARY KEY,
    ppost varchar(1000),
    ppostBY int ,
    ppostDT timestamp
)


 function posted()
    {
        if(isset($_POST['post_btn']))
        {
            $a = $_POST['post'];
            foreach ($this->livvveee() as $op) {
                $bs = $op['id'];
            $sql = "INSERT INTO `post`(`ppost`, `ppostBY`) VALUES ('$a','$bs')";
            $query = mysqli_query($this->conn(), $sql);
             if(!$query)
             {
                echo "<script>alert('Sorry Some Went Wrong')</script>";
             }
             else{
                echo "<script>alert('Posted Successfully')</script>";
             }
        }
    }
