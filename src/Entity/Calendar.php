<?php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ReflectionClass;



#[ORM\Entity]
 #[ORM\Table(name: "calendar")]
 #[ORM\InheritanceType("SINGLE_TABLE")]
 #[ORM\DiscriminatorColumn(name: "calendarType", type: "string")]
 #[ORM\DiscriminatorMap(["activity" => Activity::class, "staffSchedule" => StaffSchedule::class])]
 abstract class Calendar
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 255)]
    protected ?string $title = null;

     #[ORM\Column(type: Types::DATETIME_MUTABLE)]
     protected ?\DateTimeInterface $start = null;

     #[ORM\Column(type: Types::DATETIME_MUTABLE)]
     protected ?\DateTimeInterface $end = null;



    #[ORM\ManyToMany(targetEntity: Staff::class, cascade: ['remove'], inversedBy: 'calendars')]
    #[ORM\JoinColumn(nullable: true)]
    protected $staffs;

    #[ORM\ManyToOne(inversedBy: 'calendars')]
    #[ORM\JoinColumn(nullable: false)]
    protected ?Category $category = null;

  
  
    public function __construct()
    {
        $this->staffs = new ArrayCollection();
       
    }

   // 25/12#[ORM\ManyToOne(inversedBy: 'calendars')]
   // #[ORM\JoinColumn(nullable: false)]
   // private ?Category $category = null;

  //25/12 #[ORM\Column(nullable: true)]
   // private ?int $stock = null;

   /* #[ORM\Column(type: 'integer')]
    #[Assert\PositiveOrZero(message: 'Le stock ne peut pas être négatif')]
    private $stock; */


   // #[ORM\Column(nullable: true)]
   // private ?int $price = null;

   // #[ORM\Column(nullable: true)]
   // private ?int $modifiedPrice = null;
    /*#[Assert\NotBlank]  */
  /*  #[ORM\Column(length: 255,nullable: true)]
    private ?string $picture = null; */

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

     public function getStart(): ?\DateTimeInterface
     {
         return $this->start;
     }

     public function setStart(\DateTimeInterface $start): self
     {
         $this->start = $start;

         return $this;
     }

     public function getEnd(): ?\DateTimeInterface
     {
         return $this->end;
     }

     public function setEnd(\DateTimeInterface $end): self
     {
         $this->end = $end;

         return $this;
     }



    /**
     * @return Collection<int, Staff>
     */
    public function getStaffs(): Collection
    {
        return $this->staffs;
    }

    public function addStaff(Staff $staff): static
    {
        if (!$this->staffs->contains($staff)) {
            $this->staffs->add($staff);
            $staff->addCalendar($this);
        }

        return $this;
    }

    public function removeStaff(Staff $staff): static
    {
        if ($this->staffs->removeElement($staff)) {
            $staff->removeCalendar($this);
        }

        return $this;
    }
     public function getClassName(){
         $class = new ReflectionClass($this);
         return $class->getShortName();
     }

     public function getCategory(): ?Category
     {
         return $this->category;
     }
 
     public function setCategory(?Category $category): self
     {
         $this->category = $category;
 
         return $this;
     }
}

