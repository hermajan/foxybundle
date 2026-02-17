<?php

declare(strict_types=1);

namespace FoxyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {
	public function getConfigTreeBuilder(): TreeBuilder {
		$treeBuilder = new TreeBuilder("foxy");
		$rootNode = $treeBuilder->getRootNode();

		$rootNode
			->children()
				->arrayNode("enabled_locales")
					->scalarPrototype()->end()
					->defaultValue(["cs", "en"])
				->end()
			->end();

		return $treeBuilder;
	}
}
