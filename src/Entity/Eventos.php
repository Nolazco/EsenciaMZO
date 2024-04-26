<?php

namespace App\Entity;

use App\Model\EventosRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Column;
use Lib\Storage\Annotations\Table;
use Lib\Storage\Traits\AnnotationMappings;
use Lib\Storage\Traits\ColumnHydrate;
use Symfony\Component\HttpFoundation\File\File;

#[Table('eventos', EventosRepo::class)]
class Eventos extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public int $id;

    #[Column('name')]
    public string $name;

    #[Column('description')]
    public string $desc;

    #[Column('attach', 'getAttachUri', 'setAttachUri')]
    public ?File $attach = null;

    public function setId(int $id): static {
        $this->id = $id;
    }
    public function getId(): int {
        return $this->id;
    }

    public function setName(string $name): static {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }

    public function setDesc(string $desc): static {
        $this->desc = $desc;
    }
    public function getDesc(): string {
        return $this->desc;
    }

    public function getAttachUri(): ?string
    {
        return $this->attach?->getPathname();
    }

    public function setAttachFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->attach = new File($path, false);
        }
        return $this;
    }
}
