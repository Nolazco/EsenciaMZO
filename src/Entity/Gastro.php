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

    #[Column('author')]
    public int $author;

    #[Column('logo', 'getLogoUri', 'setLogoFromUri')]
    public ?File $logo = null;

    #[Column('description')]
    public string $description;

    #[Column('body')]
    public string $body;

    #[Column('delivery')]
    public int $delivery;

    #[Column('phone')]
    public ?string $phone;

    #[Column('menu', 'getMenuUri', 'setMenuFromUri')]
    public ?File $menu = null;

    #[Column('location')]
    public string $location;

    #[Column('date')]
    public string $date;

    public function setId(int $id): static{
        $this->id = $id;
        return $this;
    }
    public function getId(): ?int{
        return $this->id ?? null;
    }

    public function setName(string $name): static{
        $this->name = $name;
        return $this;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setAuthor(int $author): static{
        $this->author = $author;
        return $this;
    }

    public function getAuthor(): int{
        return $this->author;
    }

    public function setDesc(string $description): static{
        $this->description = $description;
        return $this;
    }

    public function getDesc(): string{
        return $this->description;
    }

    public function setBody(string $body): static{
        $this->body = $body;
        return $this;
    }

    public function getBody(): string{
        return $this->body;
    }

    public function setDeli(int $delivery): static{
        $this->delivery = $delivery;
        return $this;
    }

    public function getDeli(): int{
        return $this->delivery;
    }

    public function setPhone(string $phone): static{
        $this->phone = $phone;
        return $this;
    }

    public function getPhone(): ?string{
        return $this->phone ?? null;
    }

    public function setLocation(string $location): static{
        $this->location = $location;
        return $this;
    }

    public function getLocation(): string{
        return $this->location;
    }

    public function setDate(string $date): static{
        $this->date = $date;
        return $this;
    }

    public function getDate(): string{
        return $this->date;
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

    public function getLogoUri(): ?string
    {
        return $this->logo?->getPathname();
    }

    public function setLogoFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->logo = new File($path, false);
        }
        return $this;
    }
}
?>
