<?php 
    class connectDB{
        public $con;
        function __construct()
        {
            $this->con=mysqli_connect('localhost:4306','root','','php_quanlyktx');
            mysqli_query($this->con,"SET NAMES 'utf8'");
        }
    }
?>