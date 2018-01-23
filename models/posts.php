<?php
class Posts extends model 
{
    public function getPosts($limite = 0) 
    {
        $array = array();

        $sql = "SELECT * FROM cliente ";
        if($limite > 0) 
        {
            $sql .= " LIMIT ".$limite;
        }
        
        $sql = $this->pdo->query($sql);
        
        if($sql->rowCount() > 0) 
        {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}
?>