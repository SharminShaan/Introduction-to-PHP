<?php
class crudApp
{
    private $conn;

    public function __construct()
    {
        // #database hosts, database user, database pass, database name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'crudapp';

        $this->conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn)
        {
            die("Database Connection Error! !");
        }
    }
    public function add_data($data)
    {
        $name = $data["s_name"];
        $roll = $data["enroll"];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $query = "INSERT INTO DATA_INFO(name,roll,image) VALUE('$name',$roll,'$image')";

        if(mysqli_query($this->conn, $query))
        {   
            move_uploaded_file($tmp_name, 'upload/'.$image);
            return "Information Added Successfully";
        }
    }
}