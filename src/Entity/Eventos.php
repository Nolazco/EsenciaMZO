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

    #[Column('author')]
    public int $author;

    #[Column('description')]
    public string $desc;

    #[Column('body')]
    public string $body;

    #[Column('location')]
    public string $location;

    #[Column('category')]
    public int $cat;

    #[Column('date')]
    public string $date;

    #[Column('dateOfEvent')]
    public string $doe;

    #[Column('mainPicture', 'getPictureUri', 'setPictureUri')]
    public ?File $main;

    #[Column('attach', 'getAttachUri', 'setAttachUri')]
    public ?File $attach;

    public function setId(int $id): static {
        $this->id = $id;
    }
    public function getId(): ?int {
        return $this->id ?? null;
    }

    public function setName(string $name): static {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }

    public function setAuthor(int $author): static{
        $this->author = $author;
        return $this;
    }

    public function getAuthor(): int{
        return $this->author;
    }

    public function setDesc(string $desc): static {
        $this->desc = $desc;
    }
    public function getDesc(): string {
        return $this->desc;
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

    public function setCategoty(int $cat): static{
        $this->cat = $cat;
        return $this;
    }

    public function getCategory(): int{
        return $this->cat;
    }

    public function setDate(string $date): static{
        $this->date = $date;
        return $this;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function setDOE(string $doe): static{
        $this->doe = $doe;
        return $this;
    }

    public function getDOE(): string{
        return $this->doe;
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

    public function getPictureUri(): ?string
    {
        return $this->main?->getPathname();
    }

    public function setPictureFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->main = new File($path, false);
        }
        return $this;
    }
}
