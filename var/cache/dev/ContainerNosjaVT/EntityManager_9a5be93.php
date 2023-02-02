<?php

namespace ContainerNosjaVT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01826 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer39ec2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties72c87 = [
        
    ];

    public function getConnection()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getConnection', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getMetadataFactory', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getExpressionBuilder', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'beginTransaction', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getCache', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getCache();
    }

    public function transactional($func)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'transactional', array('func' => $func), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'commit', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->commit();
    }

    public function rollback()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'rollback', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getClassMetadata', array('className' => $className), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'createQuery', array('dql' => $dql), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'createNamedQuery', array('name' => $name), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'createQueryBuilder', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'flush', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'clear', array('entityName' => $entityName), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->clear($entityName);
    }

    public function close()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'close', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->close();
    }

    public function persist($entity)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'persist', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'remove', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'detach', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'merge', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'contains', array('entity' => $entity), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getEventManager', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getConfiguration', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'isOpen', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getUnitOfWork', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getProxyFactory', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'initializeObject', array('obj' => $obj), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'getFilters', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'isFiltersStateClean', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'hasFilters', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return $this->valueHolder01826->hasFilters();
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

        $instance->initializer39ec2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder01826) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01826 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01826->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__get', ['name' => $name], $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        if (isset(self::$publicProperties72c87[$name])) {
            return $this->valueHolder01826->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01826;

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

        $targetObject = $this->valueHolder01826;
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
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01826;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01826;
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
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__isset', array('name' => $name), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01826;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01826;
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
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__unset', array('name' => $name), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01826;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01826;
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
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__clone', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        $this->valueHolder01826 = clone $this->valueHolder01826;
    }

    public function __sleep()
    {
        $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, '__sleep', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;

        return array('valueHolder01826');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39ec2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39ec2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer39ec2 && ($this->initializer39ec2->__invoke($valueHolder01826, $this, 'initializeProxy', array(), $this->initializer39ec2) || 1) && $this->valueHolder01826 = $valueHolder01826;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01826;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01826;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
