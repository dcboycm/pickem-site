<?php
$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);
?>

<!-- define('DB_HOST', 'ec2-23-21-96-159.compute-1.amazonaws.com');
define('DB_NAME', 'dacj0ham29q2mi');
define('DB_USER', 'odlgwfrmxtsfrr');
define('DB_PASS', '6f3a930f7788aaa68211ef550e8137a421c55eba78ccacb15841337db2893afc');
$db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD"); -->
