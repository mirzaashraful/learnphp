<?php
/*
 *2. An abstract class is a class that can't be instantiated. That means you cannot create new
instances of an abstract class. It works as a base for subclasses.
Following is an example of abstract class:
abstract class Book{
public string $title = null;
abstract public setTitle(string $title): void;
public function getTitle(): string
{
return $this->title;
}
}
You have to create another class MyBook that extends the abstract class. Created an
instance of a class called MyBook and print the title name.

 */

namespace Pondit;

abstract class Book
{

    public ?string $title = null;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    // Abstract method with an argument
    abstract public function setTitle(string $title): void;
}

