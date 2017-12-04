<?php

class Page {
    
    protected $title;
    protected $content;
    
    // Конуструктор
    public function __construct($title='', $content='') {
        $this->title = $title;
        $this->content = $content;
    }
    
    public function title() {
        return $this->title;
    }
    
    public function content() {
        return $this->content;
    }
    
    // Формируем нашу html - страницу
    public function render () {
        echo "<h1>".$this->title()."</h1>";
        echo "<p>".$this->content()."</p>";
    }  
}

?>