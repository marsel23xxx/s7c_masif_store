<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id-ID', array (
));

$catalogueId = new MessageCatalogue('id', array (
));
$catalogue->addFallbackCatalogue($catalogueId);

return $catalogue;
