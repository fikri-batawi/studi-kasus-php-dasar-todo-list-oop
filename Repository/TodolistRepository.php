<?php

namespace Repository {

    use Entity\Todolist;

  interface TodolistRepository {

    public function save(Todolist $todolist): void;

    public function remove(int $number): bool;

    public function findAll(): array;

  }

  class TodolistRepositoryImpl implements TodolistRepository {

    private array $todolist = array();

    function save(Todolist $todolist): void
    {
      
    }

    function remove(int $number): bool
    {
      return false;  
    }

    function findAll(): array
    {
      return $this->todolist;
    }

  }

}