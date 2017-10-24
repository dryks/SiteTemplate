<?php
class Footer{
    public $information;
    public $content;

    public function createInformation($author, $contactdata, $creator){
       $information = "<p>$author</p>"
                    . "<p>$contactdata</p>"
                    . "<p>Created by $creator</p>"
                    . "<p>Template made by Kuraikari</p>";
       return $information;
    }

    public function createFooter(){
        if ($information = "") {
          $this->createInformation(); 
        }
        $footer = "<footer>$information</footer>";
        return $footer;
    }

    public function __construct($author, $contactdata, $creator){
      $this->information = $this->createInformation($author, $contactdata, $creator);
    }
}
?>
