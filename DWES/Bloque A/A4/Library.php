<?php 
class Library{

    public array $books;
    public string $libraryName; 

    public function __construct(string $libraryName, array $books)
    {
        $this->libraryName = $libraryName;
        $this->books = $books;
    }

    public function addBook(Book $book): void{
        $this->books[] = $book;
    }

    public function removeBook(Book $book): bool {
        foreach ($this->books as $key => $b) {
            if ($b->title === $book->title) {
                unset($this->books[$key]);
                $this->books = array_values($this->books);
                return true;
            }
        }
        return false; 
    }

    public function getBooks(): array{
        return $this->books; 
    }
    

}

?>