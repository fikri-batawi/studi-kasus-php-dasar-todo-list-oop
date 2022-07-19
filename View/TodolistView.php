<?php

namespace View {

  require_once './Helper/InputHelper.php';

  use Service\TodolistService;
  use Helper\InputHelper;

  class TodolistView {

    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
      $this->todolistService = $todolistService;
    }

    public function showTodolist(): void
    {
      while(true){
        $this->todolistService->showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah TodoList" . PHP_EOL;
        echo "2. Hapus TodoList" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
      
        $pilihan = InputHelper::input("Pilih");
        if($pilihan == "1"){
          
        }elseif($pilihan == "2"){
          
        }elseif($pilihan == "x"){
          break;
        }else{
          echo "Pilihan tidak di mengerti" . PHP_EOL;
        }
      }
    
      echo "Sampai Jumpa Lagi" . PHP_EOL;
    }
    public function addTodolist(): void
    {

    }
    public function removeTodolist(): void
    {

    }

  }

}