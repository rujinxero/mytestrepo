<?php
 
    class Human {
        public $hair = "black";
        
        
        //Called only when the this class is used to create a new object
        public function __construct()
        {
            echo 'The class "', __CLASS__, '" was initiated!<br />';
        }
        
        public function __destruct()
        {
            echo 'The class "', __CLASS__, '" was destroyed.<br />';
        }
        
        public function setHairColor($newval)
        {
            $this->hair = $newval;
        }
     
        public function getHairColor()
        {
            return $this->hair . "<br />";
        }
        
        
    }
    
    class Male extends Human
    {
        public $sex = "M";
        //Called when getting destroyed...
        public function __destruct()
        {
            parent::__destruct(); //Call the parent class's destruct 1st
            echo 'The class "', __CLASS__, '" was destroyed.<br />';
        }
    }
    
    class Female extends Human
    {
        public $sex = "F";
        //Called when getting destroyed...
        public function __destruct()
        {
            parent::__destruct(); //Call the parent class's destruct 1st
            echo 'The class "', __CLASS__, '" was destroyed.<br />';
        }
    }
    
     
    $boy = new Male;
    $girl = new Female;
    
    
        
    
 
?><!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
    <?php
        $boy->setHairColor("green");
        echo $boy->getHairColor();
        echo $girl->sex . "<br/>";
    ?>
</body>

</html>
