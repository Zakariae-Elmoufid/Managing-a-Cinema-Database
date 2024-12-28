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

    private $conn; 

    // Constructor to set the database connection
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Add movie details
    public function add_movie($title, $gender, $duration, $release_date, $director, $distribution) {
        $this->title = $title;
        $this->gender = $gender;
        $this->duration = $duration;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->distribution = $distribution;
    }

    // Insert movie into the database
    public function insert_movie() {
        $sql = "INSERT INTO movies (title, gender, duration, release_date, director, distribution) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $this->title, $this->gender, $this->duration, $this->release_date, $this->director, $this->distribution);

        ($stmt->execute()) ;
        $stmt->close();
    }

    // Display movie details
    public function display_movie() {
        $movies = [
            $this->title,
            $this->gender,
            $this->duration,
            $this->release_date,
            $this->director,
            $this->distribution
        ];
        return $movies;
    }
}

// Initialize database connection
$conn = new mysqli($servername, $username, $password, $database);



// Create movie instance
$TheGreenMile = new movie($conn);

// Add movie details
$TheGreenMile->add_movie(
    "The Green Mile",
    "Drame fantastique",
    "189 minutes",
    "1999-12-10",
    "Frank Darabont",
    "David Morse"
);

// Insert movie into the database
$TheGreenMile->insert_movie();

// Display movie details
echo '<pre>';
print_r($TheGreenMile->display_movie());
echo '</pre>';

$conn->close();
?>
