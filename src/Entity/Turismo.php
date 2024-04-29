<?php 

namespace App\Entity;

use Lib\Storage\Annotations\Column;
use Lib\Storage\Traits\ColumnHydrate;
use Lib\Storage\Traits\AnnotationMappings;
use App\Model\TurismoRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Table;

#[Table('turismo', TurismoRepo::class)]
class Turismo extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public ?int $id;

    #[Column('name')]
    public string $name;

    #[Column('description')]
    public string $description;

    #[Column('location')]
    public string $location;

    public function setId(int $id): static{
        $this->id = $id;
        return $this;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setName(string $name): static{
        $this->name = $name;
        return $this;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setDesc(string $description): static{
        $this->description = $description;
        return $this;
    }

    public function getDesc(): string{
        return $this->description;
    }

    public function setLocation(string $location): static{
        $this->location = $location;
        return $this;
    }

    public function getLocation(): string{
        return $this->location;
    }
}

?>
