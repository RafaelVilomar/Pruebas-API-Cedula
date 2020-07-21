<?php
    class conexion{
        public $con;
        static $instancia = null;

        static function consulta($sql){
            if(self::$instancia == null){
                self::$instancia = new conexion();
            }

            $rs = mysqli_query(self::$instancia->con, $sql);
            return $rs;
        }
        function getInstancia(){
            return $this->con;
        }
        function __construct(){
            $this->con = mysqli_connect(servidor, usuario, pass, dbname) or die(
            "<script>
                window.location = 'install.php';
            </script>"    
        );
        }

        function __destruct(){
            mysqli_close($this->con);
        }
    }