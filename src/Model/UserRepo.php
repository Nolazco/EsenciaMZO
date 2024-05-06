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
}
