<?php 

namespace App\Model;

use Lib\Storage\AbstractModel;

class GastroRepo extends AbstractModel{
    public function getLastThree(): ?array{
        $data = $this->queryBind(
            "SELECT * FROM {$this->getTable()} ORDER BY id DESC LIMIT 3"
        );

        //dd($data);
        return $data ?? null;
    }
}
