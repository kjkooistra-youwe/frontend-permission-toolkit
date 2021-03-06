<?php

declare(strict_types=1);

namespace FrontendPermissionToolkitBundle\Event;

use FrontendPermissionToolkitBundle\Service;
use Pimcore\Model\DataObject\Concrete;
use Symfony\Component\EventDispatcher\Event;

class PermissionsEvent extends Event
{
    public const POST_GET = 'frontendPermissionsToolkit.service.postGetPermissions';

    /**
     * @var array
     */
    protected $permissions;

    /**
     * @var Concrete
     */
    protected $object;

    /**
     * @var Service
     */
    protected $service;

    /**
     * @param array $permissions
     * @param Concrete $object
     * @param Service $service
     */
    public function __construct(array $permissions, Concrete $object, Service $service)
    {
        $this->permissions = $permissions;
        $this->object = $object;
        $this->service = $service;
    }

    /**
     * @return array
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param array $permissions
     * @return $this
     */
    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * @return Concrete
     */
    public function getObject(): Concrete
    {
        return $this->object;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }
}
