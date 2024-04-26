<?php

namespace App\Entity;

use App\Model\CommentsRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Column;
use Lib\Storage\Annotations\Table;
use Lib\Storage\Traits\AnnotationMappings;
use Lib\Storage\Traits\ColumnHydrate;

#[Table('comments', CommentsRepo::class)]
class Comments extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public int $id;

    #[Column('id_post')]
    public int $idPost;

    #[Column('id_author')]
    public int $idAuthor;

    #[Column('body')]
    public string $body;

    public function setId(int $id): static {
        $this->id = $id;
    }
    public function getId(): int {
        return $this->id;
    }

    public function setIdPost(int $idPost): static {
        $this->idPost = $idPost;
    }
    public function getIdPost(): int {
        return $this->idPost;
    }

    public function setIdAuthor(int $idAuthor): static {
        $this->idAuthor = $idAuthor;
    }
    public function getIdAuthor(): int {
        return $this->idAuthor;
    }

    public function setBody(string $body): static {
        $this->body = $body;
    }
    public function getBody(): string {
        return $this->body;
    }
}
