<?php 
namespace App\Model;

use App\Entity\User;
use Lib\Storage\AbstractModel;

class UserRepo extends AbstractModel{
    public function getByEmail(string $email): ?User{
        $entity = new $this->entity();
        $entity->email = $email;

        $query = "SELECT * FROM {$this->getTable()} WHERE email = :email";
        $data = $this->queryBind($query, $entity, $entity->includeMapping(['email']));

        return $data[0] ?? null;
    }

    public function changeRole(int $id, int $rol): bool{
        $entity = new $this->entity();
        $entity->id = $id;

        $query = "UPDATE {$this->getTable()} SET `role` = '{$rol}' WHERE id = :id";

        $binding = $this->queryBind($query, $entity, $entity->includeMapping(['id']));

        return true;
    }
}
