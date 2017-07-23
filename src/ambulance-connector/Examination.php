<?php declare(strict_types=1);

namespace wittenejdek\AmbulanceConnector;

class Examination
{

	/** @var int */
	private $id;

	/** @var string */
	private $title;

	public function __construct($id, $title)
	{
		$this->id = $id;
		$this->title = $title;
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

}
