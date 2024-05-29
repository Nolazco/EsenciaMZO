<?php 
namespace App\Model;

use Lib\Storage\AbstractModel;

class TurismoRepo extends AbstractModel{
    public function getLastThree(): ?array{
        $data = $this->queryBind(
            "SELECT * FROM {$this->getTable()} ORDER BY id DESC LIMIT 3"
        );

        return $data ?? null;
    }

    public function getDesc(): ?array{
        $data = $this->queryBind(
            "SELECT * FROM {$this->getTable()} ORDER BY id DESC"
        );

        //dd($data);
        return $data ?? null;
    }

    public function getByAuthor(int $author, int $limit = 0, int $offset = 0, int $page = 0): ?array{
        $entity = new $this->entity();
        $entity->author = $author;

        $query = "SELECT * FROM {$this->getTable()} WHERE author = :author ";
        if ($limit !== 0) {
            $offset += $page * $limit;
            $query .= "LIMIT $limit OFFSET $offset";
        }

        $data = $this->queryBind($query, $entity, $entity->includeMapping(['author']));

        return $data ?? null;
    }
}
