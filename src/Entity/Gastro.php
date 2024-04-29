<?php 

namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Lib\Storage\Annotations\Column;
use Lib\Storage\Traits\ColumnHydrate;
use Lib\Storage\Traits\AnnotationMappings;
use App\Model\GastroRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Table;

#[Table('gastro', GastroRepo::class)]
class Gastro extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public ?int $id;

    #[Column('name')]
    public string $name;

    #[Column('description')]
    public string $description;

    #[Column('delivery')]
    public bool $delivery = true;

    #[Column('phone')]
    public string $phone;

    #[Column('menu', 'getMenuUri', 'setMenuFromUri')]
    public ?File $menu = null;

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

    public function setDeli(bool $delivery): static{
        $this->delivery = $delivery;
        return $this;
    }

    public function getDeli(): bool{
        return $this->delivery;
    }

    public function setPhone(string $phone): static{
        $this->phone = $phone;
        return $this;
    }

    public function getPhone(): string{
        return $this->phone;
    }

    public function setLocation(string $location): static{
        $this->location = $location;
        return $this;
    }

    public function getLocation(): string{
        return $this->location;
    }

    public function getMenuUri(): ?string
    {
        return $this->menu?->getPathname();
    }

    public function setMenuFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->menu = new File($path, false);
        }
        return $this;
    }
}
?>
