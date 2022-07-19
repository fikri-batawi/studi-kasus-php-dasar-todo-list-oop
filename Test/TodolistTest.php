<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

require_once './Entity/Todolist.php';
require_once './Repository/TodolistRepository.php';
require_once './Service/TodolistService.php';

function testShowTodolist()
{
  $todolistRepository = new TodolistRepositoryImpl;
  $todolistService    = new TodolistServiceImpl($todolistRepository);
  $todolistRepository->todolist[1] = "Mandi";
  $todolistRepository->todolist[2] = "Makan";
  $todolistRepository->todolist[3] = "Minum";

  $todolistService->showTodolist();
}

function testAddTodolist()
{
  $todolistRepository = new TodolistRepositoryImpl;
  $todolistService    = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("Makan");
  $todolistService->showTodolist();
  $todolistService->addTodolist("Minum");
  $todolistService->showTodolist();
  $todolistService->addTodolist("Mandi");
  $todolistService->showTodolist();
}

testAddTodolist();