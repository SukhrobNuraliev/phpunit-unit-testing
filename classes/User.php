<?php

class User
{
    public int $age;
    public array $favorite_movies = [];
    public string $name;

    /**
     * @param int $age
     * @param string $name
     */
    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function tellName(): string
    {
        return "Mening ismim " . $this->name . ".";
    }

    public function tellAge(): string
    {
        return "Men " . $this->age . " yoshman.";
    }

    public function addFavoriteMovie(string $movie): bool
    {
        $this->favorite_movies[] = $movie;

        return true;
    }

    public function removeFavoriteMovie(string $movie): bool
    {
        if (!in_array($movie, $this->favorite_movies)) throw new InvalidArgumentException("Notanish Kino: " . $movie);

        unset($this->favorite_movies[array_search($movie, $this->favorite_movies)]);

        return true;
    }
}