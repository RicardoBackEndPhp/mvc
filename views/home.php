<h1>Clientes teste</h1>
<?php
    foreach($posts as $post) 
    {    
        echo "<h3>{$post['primeiro_nome']} {$post['ultimo_nome']}</h3>";
        echo $post['email']." <hr/>";
    }
?>