<?php 
namespace App\Entity;

use App\Model\UserRepo;
use Lib\Storage\AbstractEntity;
use Lib\Storage\Annotations\Column;
use Lib\Storage\Annotations\Table;
use Lib\Storage\Traits\AnnotationMappings;
use Lib\Storage\Traits\ColumnHydrate;
use Symfony\Component\HttpFoundation\File\File;

#[Table('users', UserRepo::class)]
class User extends AbstractEntity{
    use AnnotationMappings;
    use ColumnHydrate;

    #[Column('id')]
    public ?int $id;

    #[Column('name')]
    public string $name;

    #[Column('last_name')]
    public string $lastName;

    #[Column('nickname')]
    public ?string $nickname = null;

    #[Column('email')]
    public string $email;

    #[Column('bio')]
    public string $bio;

    #[Column('password')]
    public string $password;

    #[Column('role')]
    public int $role;

    #[Column('avatar', 'getAvatarUri', 'setAvatarFromUri')]
    public ?File $avatar = null;

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

    public function setLastName(string $lastName): static{
        $this->lastName = $lastName;
        return $this;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function setNickname(string $nickname): static{
        $this->nickname = $nickname;
        return $this;
    }

    public function getNickname(): ?string{
        return $this->nickname ?? null;
    }

    public function setEmail(string $email): static{
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function getFullName(string $format = '%s %s'): string
    {
        return sprintf($format, $this->name, $this->lastName);
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function setPasswordHash(string $password): static
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return $this;
    }

    public function getAvatarUri(): ?string
    {
        return $this->avatar?->getPathname();
    }

    public function setAvatarFromUri(?string $path): static
    {
        if (!empty($path)) {
            $this->avatar = new File($path, false);
        }
        return $this;
    }
}
?>
