<?php


class Task
{
    public string $title;
    public string $description;
    public bool $completed;

    public function __construct($title, $description, $completed)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {

        return $this->description;
    }

    public function isCompleted()
    {   
        if ($this->completed === false) {
            echo "tarefa nao completada <br>";
            
        }else {
            echo "tarefa completada<br>";
        }
    }

    public function markAsCompleted()
    {
        return $this->completed = true;
    }

    public function markAsIncompleted()
    {
        return $this->completed = false;
    }
}

$tarefa1 = new Task("Comprar racão dos gatos", "Ir ao mercado", false);

echo get_class($tarefa1) . "<br>";
echo $tarefa1->title;
echo "<br>";
echo $tarefa1->description;
echo "<br>";


echo $tarefa1->markAsCompleted();
echo "<br>";

