<?php

namespace Service {

  interface TodolistService {

    public function addTodolist(string $string): void;

    public function removeTodolist(int $number): void;

    public function showTodolist(): void;

  }

}