<?php 

namespace App\Entity;

use Lib\Storage\Annotations\Column;
use Lib\Storage\Traits\ColumnHydrate;
use Lib\Storage\Traits\AnnotationMappings;
use App\Model\TagsRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Table;

#[Table('tags', TagsRepo::class)]
class Tags extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public int $id;

    #[Column('tag')]
    public string $tag;

    public function setId(int $id): static{
        $this->id = $id;
        return $this;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setTag(string $tag): string{
        $this->tag = $tag;
        return $this;
    }

    public function getTag(): string{
        return $this->tag;
    }
}
?>
