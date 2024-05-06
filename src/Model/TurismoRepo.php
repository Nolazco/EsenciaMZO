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
}
