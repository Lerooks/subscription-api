<?php


namespace App\Tournament\Domain\Entity;


use JsonSerializable;

/**
 * Class Subscription
 * @package App\Tournament\Domain\Entity
 */
class Subscription implements JsonSerializable
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $cpf;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $favoritePokemon;

    /**
     * @var string
     */
    private $note;

    /**
     * Subscription constructor.
     * @param int $id
     * @param string $name
     * @param string $cpf
     * @param string $phone
     * @param string $email
     * @param string $favoritePokemon
     * @param string $note
     */
    public function __construct(int $id, string $name, string $cpf, string $phone, string $email, string $favoritePokemon, string $note)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->email = $email;
        $this->favoritePokemon = $favoritePokemon;
        $this->note = $note;
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'cpf' => $this->getCpf(),
            'phone' => $this->getPhone(),
            'email' => $this->getEmail(),
            'favoritePokemon' => $this->getFavoritePokemon(),
            'note' => $this->getNote(),
        ];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFavoritePokemon(): string
    {
        return $this->favoritePokemon;
    }

    /**
     * @param string $favoritePokemon
     */
    public function setFavoritePokemon(string $favoritePokemon): void
    {
        $this->favoritePokemon = $favoritePokemon;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }
}