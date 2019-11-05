?php
class Dao {
  private $host = 'us-cdbr-iron-east-05.cleardb.net';
  private $dbname = 'heroku_20335a4afa944ee';
  private $username = 'bab1468551f3a4';
  private $password = '14c676b9';

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }

  public function getSongs($mood) {
    $conn = $this->getConnection();
    try {
      return $conn->query("select id from song_list where color = '$mood'", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }

  public function insertTrackData($id, $name, $album, $color) {
    $conn = $this->getConnection();
    $saveID = "insert into song_list (id, name, album, color) values (:id, :name, :album, :color)";
    $q = $conn->prepare($saveID);
    $q->bindParam(":id",$id);
    $q->bindParam(":name",$name);
    $q->bindParam(":album",$album);
    $q->bindParam(":color",$color);
    $q->execute();
  }
} ?>

