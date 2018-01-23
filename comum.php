<?php
try 
{
	$dsn = "mysql:dbname=teste;host=localhost";
	$dbuser = "root";
	$dbpass = "";
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} 
catch(PDOException $e) 
{
    die($e->getMessage());
}
?>
<h1>Notícias</h1>
<?php
$sql = "SELECT * FROM cliente LIMIT 10";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0) 
{
    foreach($sql->fetchAll() as $post) 
    {    
        echo "<h3>{$post['primeiro_nome']} {$post['ultimo_nome']}</h3>";
        echo $post['email']." <hr/>";
    }
}
?>