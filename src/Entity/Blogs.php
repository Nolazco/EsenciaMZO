<?php

namespace App\Entity;

use App\Model\BlogsRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Column;
use Lib\Storage\Annotations\Table;
use Lib\Storage\Traits\AnnotationMappings;
use Lib\Storage\Traits\ColumnHydrate;

#[Table('blogs', BlogsRepo::class)]
class Blogs extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public int $id;

    #[Column('id_author')]
    public int $idAuthor;

    #[Column('id_post')]
    public int $idPost;

    #[Column('title')]
    public string $title;

    #[Column('body')]
    public string $body;

    #[Column('likes')]
    public int $likes;

    public function setId(int $id): static{
        $this->id = $id;
        return $this;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setIdAuthor(int $idAuthor): static{
        $this->idAuthor = $idAuthor;
    }
    public function getIdAuthor(): int{
        return $this->idAuthor;
    }

    public function setIdPost(int $idPost): static{
        $this->idPost = $idPost;
    }
    public function getIdPost(): int{
        return $this->idPost;
    }

    public function setTitle(string $title): static{
        $this->title = $title;
    }
    public function getTitle(): string{
        return $this->title;
    }

    public function setBody(string $body): static{
        $this->body = $body;
    }
    public function getBody(): string{
        return $this->body;
    }

    public function setLikes(int $likes): static{
        $this->likes = $likes;
    }
    public function getLikes(): int{
        return $this->likes;
    }
}
