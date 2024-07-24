<?php
namespace Els\Entity;

class ContactInfos extends BaseEntity
{
    private ?string $message = null;
    private ?string $address = null;

    private ?string $schedules = null;

    private ?string $phone = null;

    private ?string $fax = null;

    private ?string $email = null;


    public function getContactMessage(): ?string {
        return $this->message;
    }

    public function setContactMessage(?string $message): ContactInfos {
        $this->message = $message;
        return $this;
    }

    public function getContactAddress(): ?string {
        return $this->address;
    }

    public function setContactAddress(?string $address): ContactInfos {
        $this->address = $address;
        return $this;
    }

    public function getContactSchedules(): ?string {
        return $this->schedules;
    }

    public function setContactSchedules(?string $schedules): ContactInfos {
        $this->schedules = $schedules;
        return $this;
    }
    public function getContactPhone(): ?string {
        return $this->phone;
    }

    public function setContactPhone(?string $phone): ContactInfos {
        $this->phone = $phone;
        return $this;
    }
    public function getContactFax(): ?string {
        return $this->fax;
    }

    public function setFax(?string $fax): ContactInfos {
        $this->fax = $fax;
        return $this;
    }

    public function getContactEmail(): ?string {
        return $this->email;
    }

    public function setContactEmail(?string $email): ContactInfos {
        $this->email = $email;
        return $this;
    }
}
