<?php

require_once './Entity/Todolist.php';
require_once './Repository/TodolistRepository.php';
require_once './Service/TodolistService.php';
require_once './View/TodolistView.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Makan");
  $todolistService->addTodolist("Minum");
  $todolistService->addTodolist("Mandi");

  $todolistView->showTodolist();
}

function testViewAddTodolist(): void
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService    = new TodolistServiceImpl($todolistRepository);
  $todolistView       = new TodolistView($todolistService);

  $todolistService->addTodolist("Makan");
  $todolistService->addTodolist("Minum");
  $todolistService->addTodolist("Mandi");

  $todolistView->addTodolist();
  $todolistView->showTodolist();
}

testViewAddTodolist();