<?php
#   |                                                          |
# --+----------------------------------------------------------+--
#   |   Code by : yasserbdj96                                  |
#   |   Email   : yasser.bdj96@gmail.com                       |
#   |   Github  : https://github.com/yasserbdj96               |
#   |   BTC     : bc1q2dks8w8uurca5xmfwv4jwl7upehyjjakr3xga9   |
# --+----------------------------------------------------------+--  
#   |        all posts #yasserbdj96 ,all views my own.         |
# --+----------------------------------------------------------+--
#   |                                                          |

    #START{
    header('Content-type: text/plain');

    echo "OS : ".php_uname();
    echo "\n";
    echo "your_ip: ".$_SERVER['REMOTE_ADDR'];
    echo "\n";
    echo "Server Name : ".$_SERVER['HTTP_HOST'];
    echo "\n";
    echo "Request_Method : ".$_SERVER['REQUEST_METHOD'];
    echo "\n";
    echo "Admin Server : ".$_SERVER['SERVER_ADMIN'];
    echo "\n";
    echo "Server port : ".htmlentities($_SERVER['SERVER_PORT'], ENT_QUOTES, 'UTF-8');
    echo "\n";
    echo "server_ip : ".gethostbyname($_SERVER["HTTP_HOST"]);
    echo "\n";
    echo "server_software : ".getenv("SERVER_SOFTWARE");
    echo "\n";
    echo "Php Version : ".phpversion();
    echo "\n";
    echo "Zend : ".htmlentities(zend_version(), ENT_QUOTES, 'UTF-8');
    echo "\n";
    echo "Oracle : ".$Oracle2=function_exists('ocilogon')?("ON"):("OFF");   
    echo "\n";
    echo "MySQL : ".$MySQL2=function_exists('mysql_connect')?("ON"):("OFF");
    echo "\n";
    echo "MSSQL : ".$MSSQL2=function_exists('mssql_connect')?("ON"):("OFF");
    echo "\n";
    echo "PostgreSQL : ".$pg_connect2=function_exists('pg_connect')?("ON"):("OFF");
    echo "\n";
    echo "disabled_functions : ".$r=ini_get('disable_functions') ? ini_get('disable_functions'):'none';
    echo "\n";
    #}END.
?>
