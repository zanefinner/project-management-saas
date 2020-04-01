<?php namespace Model; use PDO;
class Posts{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }


    public function getPostsByUser($author)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM posts WHERE  author=:author';
        $statement = $link->prepare($query);
        $statement->bindValue(':author', $author, PDO::PARAM_INT);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $this->db->closeDbConnection($link);
        return $row;
    }
    
}
