<?php

namespace ContainerKWPtyDh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbdfad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc829 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d7e2 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getConnection', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getMetadataFactory', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getExpressionBuilder', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'beginTransaction', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getCache', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'transactional', array('func' => $func), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'commit', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->commit();
    }

    public function rollback()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'rollback', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'createQuery', array('dql' => $dql), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'createQueryBuilder', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'flush', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'clear', array('entityName' => $entityName), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'close', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->close();
    }

    public function persist($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'persist', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'remove', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'refresh', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'detach', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'merge', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'contains', array('entity' => $entity), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getEventManager', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getConfiguration', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'isOpen', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getUnitOfWork', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getProxyFactory', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'getFilters', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'isFiltersStateClean', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'hasFilters', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return $this->valueHolderbdfad->hasFilters();
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

        $instance->initializerbc829 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbdfad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbdfad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbdfad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__get', ['name' => $name], $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        if (isset(self::$publicProperties8d7e2[$name])) {
            return $this->valueHolderbdfad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdfad;

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

        $targetObject = $this->valueHolderbdfad;
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
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdfad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbdfad;
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
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__isset', array('name' => $name), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdfad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbdfad;
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
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__unset', array('name' => $name), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdfad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbdfad;
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
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__clone', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        $this->valueHolderbdfad = clone $this->valueHolderbdfad;
    }

    public function __sleep()
    {
        $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, '__sleep', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;

        return array('valueHolderbdfad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc829 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc829;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc829 && ($this->initializerbc829->__invoke($valueHolderbdfad, $this, 'initializeProxy', array(), $this->initializerbc829) || 1) && $this->valueHolderbdfad = $valueHolderbdfad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbdfad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbdfad;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
