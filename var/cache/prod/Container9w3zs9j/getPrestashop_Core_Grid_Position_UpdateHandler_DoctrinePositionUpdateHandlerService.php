<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.position.update_handler.doctrine_position_update_handler' shared service.

return $this->services['prestashop.core.grid.position.update_handler.doctrine_position_update_handler'] = new \PrestaShop\PrestaShop\Core\Grid\Position\UpdateHandler\DoctrinePositionUpdateHandler(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'barang');
