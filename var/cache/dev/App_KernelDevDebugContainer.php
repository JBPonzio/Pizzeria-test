<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYo7vf6a\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYo7vf6a/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYo7vf6a.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYo7vf6a\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYo7vf6a\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yo7vf6a',
    'container.build_id' => '249fe7d1',
    'container.build_time' => 1620142851,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYo7vf6a');
