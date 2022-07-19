<?php

namespace Entity {
  class Todolist {

    private string $todo;

    public function __construct(string $todo)
    {
      $this->todo = $todo;
    }

    public function getTodo(): string
    {
      return $this->todolist;
    }

    public function setTodolist(string $todo): void
    {
      $this->todo = $todo;
    }

  }
}