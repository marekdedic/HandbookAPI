<?php declare(strict_types=1);
namespace OdyMaterialyAPI;

@_API_EXEC === 1 or die('Restricted access.');

class AnonymousField
{
	public $lessons = array();

	public function __construct()
	{
	}
}
