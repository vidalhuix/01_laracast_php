
 <?php
    $books = [
        [
            'name' => 'Anna Cadabra',
            'author' => 'Pitxiliqui',
            'link' => 'http://lacasa.cat',
        ],
        [
            'name' => 'Marcus Pocus',
            'author' => 'Pitxiliqui',
            'link' => 'http://lacasa.cat',
        ],
        [
            'name' => 'Sapiens',
            'author' => 'Harari',
            'link' => 'http://campus.edu',
        ]
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book["author"] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }


    $business = [
        "name" => "Laracast",
        "price" => 15,
        "categories" => [
            "php",
            "laravel",
            "JavaScript"
        ]
    ];


    require "views/index.view.php";
