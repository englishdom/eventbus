<?php

declare(strict_types=1);

namespace EventBus\Event;

use Laminas;
use EventBus\Exception;

final class EventSerializer
{
    use EventNameConverterTrait;

    /**
     * From event object to JSON
     * @param EventInterface $object
     * @return string
     */
    public function serialize(EventInterface $object): string
    {
        $hydrator = new Laminas\Hydrator\ClassMethodsHydrator();
        $hydrator->addStrategy(
            'creation_time',
            new Laminas\Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'data',
            $object->dtoStrategy()
        );

        $extracted = $hydrator->extract($object);

        /* Serialize strategy to JSON */
        $strategy = new Laminas\Hydrator\Strategy\SerializableStrategy(
            new Laminas\Serializer\Adapter\Json()
        );
        return $strategy->extract($extracted);
    }

    /**
     * From JSON to event object
     * @return EventInterface
     */
    public function unserialize(string $json): EventInterface
    {
        /* Deserialize json */
        $strategy = new Laminas\Hydrator\Strategy\SerializableStrategy(
            new Laminas\Serializer\Adapter\Json()
        );
        $hydrated = $strategy->hydrate($json);

        /* Check data */
        if (!isset($hydrated['data'])) {
            throw new Exception\InvalidEventStructureException('Does not exist "data" in structure of event');
        }

        /* Check event_name */
        if (!isset($hydrated['event_name'])) {
            throw new Exception\InvalidEventStructureException('Does not exist "event_name" in structure of event');
        }

        $eventObject = $this->eventFactory($hydrated['event_name']);
        unset($hydrated['event_name']);

        $hydrator = new Laminas\Hydrator\ClassMethodsHydrator();
        $hydrator->addStrategy(
            'creation_time',
            new Laminas\Hydrator\Strategy\DateTimeFormatterStrategy(\DateTime::RFC3339, null, true)
        );
        $hydrator->addStrategy(
            'data',
            $eventObject->dtoStrategy()
        );
        $eventObject = $hydrator->hydrate($hydrated, $eventObject);

        return $eventObject;
    }

    protected function eventFactory(string $name): EventInterface
    {
        $namingStrategy = new Laminas\Hydrator\NamingStrategy\UnderscoreNamingStrategy();
        $className = 'EventBus\\Event\\' . ucfirst($namingStrategy->hydrate($name)) . 'Event';

        if (!class_exists($className)) {
            throw new Exception\UnregisteredEventException('Unregistered Event Class');
        }

        $event = new $className();

        if (!$event instanceof EventInterface) {
            throw new Exception\ImplementEventInterfaceException('Event did not implement EventInterface');
        }

        return $event;
    }
}
