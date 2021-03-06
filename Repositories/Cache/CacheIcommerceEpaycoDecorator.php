<?php

namespace Modules\Icommerceepayco\Repositories\Cache;

use Modules\Icommerceepayco\Repositories\IcommerceEpaycoRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheIcommerceEpaycoDecorator extends BaseCacheDecorator implements IcommerceEpaycoRepository
{
    public function __construct(IcommerceEpaycoRepository $icommerceepayco)
    {
        parent::__construct();
        $this->entityName = 'icommerceepayco.icommerceepaycos';
        $this->repository = $icommerceepayco;
    }

    
}