<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTZCM8P1\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTZCM8P1/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTZCM8P1.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTZCM8P1\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerTZCM8P1\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'TZCM8P1',
    'container.build_id' => 'b708298f',
    'container.build_time' => 1519312269,
));
