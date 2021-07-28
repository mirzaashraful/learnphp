<?php
namespace  Pondit;

// Child classes
class MyBook extends Book
{
    public function setTitle($title): void
    {
       echo $title;
    }
}
$displyName = new MyBook();
$displyName->setTitle('Rubel');

