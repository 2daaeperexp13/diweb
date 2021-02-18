<?php

namespace ContainerGpUxnxm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16f96 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb406e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01bc9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getConnection', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getMetadataFactory', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getExpressionBuilder', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'beginTransaction', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getCache', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'transactional', array('func' => $func), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->transactional($func);
    }

    public function commit()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'commit', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->commit();
    }

    public function rollback()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'rollback', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getClassMetadata', array('className' => $className), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'createQuery', array('dql' => $dql), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'createNamedQuery', array('name' => $name), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'createQueryBuilder', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'flush', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'clear', array('entityName' => $entityName), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->clear($entityName);
    }

    public function close()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'close', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->close();
    }

    public function persist($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'persist', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'remove', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'refresh', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'detach', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'merge', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'contains', array('entity' => $entity), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getEventManager', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getConfiguration', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'isOpen', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getUnitOfWork', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getProxyFactory', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'initializeObject', array('obj' => $obj), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'getFilters', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'isFiltersStateClean', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'hasFilters', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return $this->valueHolder16f96->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb406e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16f96) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16f96 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16f96->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__get', ['name' => $name], $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        if (isset(self::$publicProperties01bc9[$name])) {
            return $this->valueHolder16f96->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16f96;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16f96;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16f96;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16f96;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__isset', array('name' => $name), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16f96;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16f96;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__unset', array('name' => $name), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16f96;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16f96;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__clone', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        $this->valueHolder16f96 = clone $this->valueHolder16f96;
    }

    public function __sleep()
    {
        $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, '__sleep', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;

        return array('valueHolder16f96');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb406e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb406e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb406e && ($this->initializerb406e->__invoke($valueHolder16f96, $this, 'initializeProxy', array(), $this->initializerb406e) || 1) && $this->valueHolder16f96 = $valueHolder16f96;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16f96;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16f96;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
