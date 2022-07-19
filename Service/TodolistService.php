<?php

namespace Service {

  use Repository\TodolistRepository;

  interface TodolistService {

    public function addTodolist(string $string): void;

    public function removeTodolist(int $number): void;

    public function showTodolist(): void;

  }

  class TodolistServiceImpl implements TodolistService {

    private TodolistRepository $todolistRepository;

    function __construct(TodolistRepository $todolistRepository)
    {
      $this->todolistRepository = $todolistRepository;
    }

    function addTodolist(string $string): void
    {
      
    }

    function removeTodolist(int $number): void
    {
      
    }

    function showTodolist(): void
    {
      echo "TODOLIST" . PHP_EOL;
      $todolist = $this->todolistRepository->findAll();
      foreach($todolist as $number => $value){
        echo "$number. $value" . PHP_EOL;
      }
    }

  }

}