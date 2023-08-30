<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
#[UniqueEntity(fields: ['dateDeCreation'], message: 'This time is already past')]
class Ticket
{
    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDeCreation = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroDeParking = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'tickets')]
    private Collection $agent;

    public function __construct()
    {
        $this->agent = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getDateDeCreation(): ?\DateTimeInterface
    {
        return $this->dateDeCreation;
    }

    public function setDateDeCreation(\DateTimeInterface $dateDeCreation): static
    {
        $this->dateDeCreation = $dateDeCreation;

        return $this;
    }

    public function getNumeroDeParking(): ?string
    {
        return $this->numeroDeParking;
    }

    public function setNumeroDeParking(string $numeroDeParking): static
    {
        $this->numeroDeParking = $numeroDeParking;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getAgent(): Collection
    {
        return $this->agent;
    }

    public function addAgent(UserInterface $user): static
    {
        if (!$this->agent->contains($user)) {
            if (in_array('ROLE_AGENT', $user->getRoles(), true)) {
                $this->agent->add($user);
            }
        }

        return $this;
    }

    public function removeAgent(User $agent): static
    {
        $this->agent->removeElement($agent);

        return $this;
    }
}
