<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.feature.repository.feature_repository' shared service.

return $this->services['prestashop.adapter.feature.repository.feature_repository'] = new \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'barang');
