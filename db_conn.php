<?php
require "db_config.php";

class DataBase
{
    public $connect;
    public $data;
    private $sql;
    protected $servername;
    protected $username;
    protected $password;
    protected $databasename;

    public function __construct()
    {
        $this->connect = null;
        $this->data = null;
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->servername = $dbc->servername;
        $this->username = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
    }

    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        return $this->connect;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }

    function authen_login ($uname, $pword) { 

        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        $username = $this->prepareData($uname);
        $password = $this->prepareData($pword);

        $this->sql = "select * from admin where admin_uname = '" . $username . "'";
            $result = mysqli_query($this->connect, $this->sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) != 0) {
                $dbusername = $row['admin_uname'];
                $dbpassword = $row['admin_pword'];
                if ($dbusername == $username && password_verify($password, $dbpassword)) {
                    echo "<script>
                  window.location.href='home.php';
                  </script>"; 
                }
                else {
                    echo "<script>
                    window.location.href='index.php';
                    </script>";
                   }
            }
            else {
                echo "<script>
                window.location.href='index.php';
                </script>";
               }
       
        }

        function obj_delete ($objective_id) { 

            $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
            $objid = $this->prepareData($objective_id);
    
            $this->sql = "delete from objectives where objective_id = '$objid'";
                if (mysqli_query($this->connect, $this->sql)){
                    echo "<script>
                      window.location.href='career.php';
                      </script>"; 
                }
                else {
                    echo "<script>
                    window.location.href='career.php';
                    </script>";
                   }
           
            }
}
    
       

    
?>