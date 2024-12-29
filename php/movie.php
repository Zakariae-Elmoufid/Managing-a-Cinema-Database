<?php 

include '../data/config.php';

class movie {

    // Properties
    private $title;
    private $gender;
    private $duration;
    private $release_date;
    private $director;
    private $distribution;
    private $pdo;

  

    public function __construct($pdo) {
      $this->pdo = $pdo;
    }

  public function addMovie($title, $gender, $duration, $release_date, $director, $distribution) {
    $sql = "INSERT INTO movies (title, gender, duration, release_date, director, distribution) 
            VALUES (:title, :gender, :duration, :release_date, :director, :distribution)";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':duration', $duration);
    $stmt->bindParam(':release_date', $release_date);
    $stmt->bindParam(':director', $director);
    $stmt->bindParam(':distribution', $distribution); 

    
    $stmt->execute();
}

    // Display movie details
      public function getMovies() {
        $sql = "SELECT * FROM movies";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour un film
    public function updateMovie($id, $title, $gender, $duration, $release_date, $director, $distribution) {
        $sql = "UPDATE movies 
                SET title = :title, genre = :gender, duration = :duration, release_date = :release_date, 
                    director = :director, distribution = :distribution 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindParam(':release_date', $release_date);
        $stmt->bindParam(':director', $director);
        $stmt->bindParam(':distribution', $distribution); 

        
        echo "Film mis à jour avec succès !";
    }

    // Supprimer un film
    public function deleteMovie($id) {
        $sql = "DELETE FROM movies WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        
        echo "Film supprimé avec succès!";
    }
}






?>
