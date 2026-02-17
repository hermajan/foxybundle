<?php

namespace FoxyBundle\DatabaseRouter;

/**
 * Attribute class used to define routing information associated with a database entity.
 *
 * This attribute can be applied to methods and provides information such as the route path, the name identifier for the route, and the related entity class.
 *
 * @param array|null $path The route path(s) associated with the method (optional).
 * @param string $name The name or identifier for the route.
 * @param string $entityClass The fully qualified class name of the associated database entity.
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
class DatabaseRoute {
	public function __construct(public ?array $path = null, public string $name = "", public string $entityClass = "") {
	}
}
