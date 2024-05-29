<?php 

namespace App\Entity;

use Lib\Storage\Annotations\Column;
use Lib\Storage\Traits\ColumnHydrate;
use Lib\Storage\Traits\AnnotationMappings;
use App\Model\TurismoRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Table;
use Symfony\Component\HttpFoundation\File\File;

#[Table('turismo', TurismoRepo::class)]
class Turismo extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public ?int $id;

    #[Column('name')]
    public string $name;

    #[Column('author')]
    public int $author;

    #[Column('description')]
    public string $description;

    #[Column('body')]
    public string $body;

    #[Column('location')]
    public string $location;

    #[Column('photo', 'getPhotoUri', 'setPhotoFromUri')]
    public ?File $photo = null;

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

    public function getPhotoUri(): ?string
    {
        return $this->photo?->getPathname();
    }

    public function setPhotoFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->photo = new File($path, false);
        }
        return $this;
    }
}
