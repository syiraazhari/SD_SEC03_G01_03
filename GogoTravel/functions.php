
<?php
    require("config.php");

function getUserData($id)
    {
        $array = array();
        $sql = mysql_query("SELECT * FROM user WHERE id=".$id);
        while($row = mysql_fetch_assoc($sql))
        {
            $array['id'] = isset($row['id']);
            $array['name'] = isset($row['name']);
            $array['username'] = isset($row['username']);
            $array['email'] = isset($row['email']);
            $array['password'] = isset($row['password']);
        }
        return $array;
    }

function getId($username)
    {
        $sql = mysql_query("SELECT id FROM user WHERE username=".$username);
        while($row = mysql_fetch_assoc($q))
        {
            return $row['id'];
        }
    }

?>