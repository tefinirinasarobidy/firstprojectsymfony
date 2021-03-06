<?php

namespace ContainerXxbF2M1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder637c2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7806 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8631 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getConnection', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getMetadataFactory', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getExpressionBuilder', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'beginTransaction', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getCache', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'transactional', array('func' => $func), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'commit', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->commit();
    }

    public function rollback()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'rollback', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'createQuery', array('dql' => $dql), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'createQueryBuilder', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'flush', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'clear', array('entityName' => $entityName), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'close', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->close();
    }

    public function persist($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'persist', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'remove', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'refresh', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'detach', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'merge', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'contains', array('entity' => $entity), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getEventManager', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getConfiguration', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'isOpen', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getUnitOfWork', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getProxyFactory', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'getFilters', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'isFiltersStateClean', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'hasFilters', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return $this->valueHolder637c2->hasFilters();
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

        $instance->initializerd7806 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder637c2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder637c2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder637c2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__get', ['name' => $name], $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        if (isset(self::$publicPropertiesd8631[$name])) {
            return $this->valueHolder637c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder637c2;

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

        $targetObject = $this->valueHolder637c2;
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
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder637c2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder637c2;
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
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__isset', array('name' => $name), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder637c2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder637c2;
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
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__unset', array('name' => $name), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder637c2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder637c2;
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
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__clone', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        $this->valueHolder637c2 = clone $this->valueHolder637c2;
    }

    public function __sleep()
    {
        $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, '__sleep', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;

        return array('valueHolder637c2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7806 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7806;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7806 && ($this->initializerd7806->__invoke($valueHolder637c2, $this, 'initializeProxy', array(), $this->initializerd7806) || 1) && $this->valueHolder637c2 = $valueHolder637c2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder637c2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder637c2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
