<?php

declare(strict_types=1);
/**
 * Ingo configuration class
 *
 * Provides access to the Ingo configuration settings.
 *
 * Old pattern: globals $conf; $somethingDetail = $conf['something']['detail']; *
 * New pattern: $config = $injector->get(IngoConfig::class); $somethingDetail = $config->get('something.detail');
 *
 * Prefer DI over instantiating $config in your code.
 */

namespace Horde\Ingo;

use Horde\Core\Config\State;
use Horde\Injector\Attribute\Factory;

#[Factory(factory: IngoConfigFactory::class, method: 'create')]
class IngoConfig extends State {}
