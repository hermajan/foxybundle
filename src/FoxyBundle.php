<?php

declare(strict_types=1);

namespace FoxyBundle;

use FoxyBundle\DependencyInjection\FoxyExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FoxyBundle extends Bundle {
	public function getContainerExtension(): ?ExtensionInterface {
		if(null === $this->extension) {
			$this->extension = new FoxyExtension();
		}

		return $this->extension;
	}
}
