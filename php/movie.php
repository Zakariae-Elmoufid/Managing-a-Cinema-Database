<?php 
class movie {

    //propertie
    private $title;
    private $gender;
    private $duration;
    private $release_date;
    private $director;
    private $distribution;

    public function __construct($title,$gender,$duration,$release_date,$director,$distribution){
              $this->title = $title;
              $this->gender = $gender;
              $this->duration = $duration;
              $this->release_date = $release_date;
              $this->director = $director;
              $this->distribution = $distribution;
    }

    public function display_movie(){
      $myArray = [ $this->title ,
        $this->gender ,
        $this->duration ,
        $this->release_date ,
        $this->director ,
        $this->distribution ];
        return $myArray;
    }

    public function update_movie(){

    }
    
    public function delete_movie(){
        
    }

}

$TheGreenMile=  new movie("The Green Mile","Drame fantastique","189 minutes", "Décembre 1999 (Sortie aux États-Unis)","Frank Darabont", "David Morse");

echo '<pre>';
print_r($TheGreenMile->display_movie());

echo '</pre>';

?>