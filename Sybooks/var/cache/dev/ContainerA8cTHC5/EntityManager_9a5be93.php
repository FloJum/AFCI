<?php

namespace ContainerA8cTHC5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6c89f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55cbf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc031e = [
        
    ];

    public function getConnection()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getConnection', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getMetadataFactory', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getExpressionBuilder', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'beginTransaction', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getCache', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'transactional', array('func' => $func), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'commit', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->commit();
    }

    public function rollback()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'rollback', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getClassMetadata', array('className' => $className), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'createQuery', array('dql' => $dql), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'createNamedQuery', array('name' => $name), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'createQueryBuilder', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'flush', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'clear', array('entityName' => $entityName), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->clear($entityName);
    }

    public function close()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'close', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->close();
    }

    public function persist($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'persist', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'remove', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'refresh', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'detach', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'merge', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'contains', array('entity' => $entity), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getEventManager', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getConfiguration', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'isOpen', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getUnitOfWork', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getProxyFactory', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'initializeObject', array('obj' => $obj), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'getFilters', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'isFiltersStateClean', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'hasFilters', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return $this->valueHolder6c89f->hasFilters();
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

        $instance->initializer55cbf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6c89f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c89f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6c89f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__get', ['name' => $name], $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        if (isset(self::$publicPropertiesc031e[$name])) {
            return $this->valueHolder6c89f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c89f;

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

        $targetObject = $this->valueHolder6c89f;
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
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c89f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c89f;
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
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__isset', array('name' => $name), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c89f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6c89f;
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
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__unset', array('name' => $name), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c89f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6c89f;
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
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__clone', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        $this->valueHolder6c89f = clone $this->valueHolder6c89f;
    }

    public function __sleep()
    {
        $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, '__sleep', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;

        return array('valueHolder6c89f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55cbf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55cbf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55cbf && ($this->initializer55cbf->__invoke($valueHolder6c89f, $this, 'initializeProxy', array(), $this->initializer55cbf) || 1) && $this->valueHolder6c89f = $valueHolder6c89f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c89f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c89f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
