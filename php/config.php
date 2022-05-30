<?php // Fichier à lier avec un "require_once"
// Section pour les erreurs (logs)
error_reporting(-1); // Montre tous les erreurs
ini_set("display_errors", "1");
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log"); // Fichier du log
// Fin de section
class BaseDeDonnées // Classe à appeler pour faire fonctionner une page qui demande la base de données au fonctionnement.
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'autocompletion';
    private $db;
    public function __construct($host = null, $username = null, $password = null, $database = null)
    {
        if($host != null)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        try
        {
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch(PDOException $messageErreur)
        {
            echo "ERREUR :" . " ". $messageErreur->getMessage();
        }
    }
    public function query($sql, $data = array())
    {
        $request = $this->db->prepare($sql);
        $request->execute($data);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
    public function rechercheParID($name)
    {
        $query = "SELECT * FROM `products` WHERE `name` LIKE :name";
        $request = $this->db->prepare($query);
        $request->execute(["name" => "%".$name."%"]);
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
?>
