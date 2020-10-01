<?php


namespace App\Tournament\Application\Command;


use Webmozart\Assert\Assert;

/**
 * Class CreateSubscriptionCommand
 * @package App\Tournament\Application\Command
 */
class CreateSubscriptionCommand
{
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
     * CreateSubscriptionCommand constructor.
     * @param string $name
     * @param string $cpf
     * @param string $phone
     * @param string $email
     * @param string $favoritePokemon
     * @param string $note
     */
    public function __construct(string $name, string $cpf, string $phone, string $email, string $favoritePokemon, string $note)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->email = $email;
        $this->favoritePokemon = $favoritePokemon;
        $this->note = $note;
    }

    /**
     * @param array $data
     * @return CreateSubscriptionCommand
     */
    public static function fromArray(array $data): CreateSubscriptionCommand
    {
        Assert::keyExists($data, 'name', 'Field "name" is required.');
        Assert::keyExists($data, 'cpf', 'Field "cpf" is required.');
        Assert::keyExists($data, 'phone', 'Field "phone" is required.');
        Assert::keyExists($data, 'email', 'Field "email" is required.');
        Assert::keyExists($data, 'favoritePokemon', 'Field "favoritePokemon" is required.');
        Assert::keyExists($data, 'note', 'Field "note" is required.');

        Assert::string($data['name'], 'Field "name" is not a string.');
        Assert::string($data['cpf'], 'Field "cpf" is not a string.');
        Assert::string($data['phone'], 'Field "phone" is not a string.');
        Assert::string($data['email'], 'Field "email" is not a string.');
        Assert::string($data['favoritePokemon'], 'Field "favoritePokemon" is not a string.');
        Assert::string($data['note'], 'Field "note" is not a string.');

        return new self(
            $data['name'],
            $data['cpf'],
            $data['phone'],
            $data['email'],
            $data['favoritePokemon'],
            $data['note']
        );
    }

    /**
     * @return string
     */
    public
    function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public
    function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public
    function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public
    function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public
    function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public
    function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public
    function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public
    function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public
    function getFavoritePokemon(): string
    {
        return $this->favoritePokemon;
    }

    /**
     * @param string $favoritePokemon
     */
    public
    function setFavoritePokemon(string $favoritePokemon): void
    {
        $this->favoritePokemon = $favoritePokemon;
    }

    /**
     * @return string
     */
    public
    function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public
    function setNote(string $note): void
    {
        $this->note = $note;
    }
}