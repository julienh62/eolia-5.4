<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKg0vYxh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKg0vYxh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKg0vYxh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKg0vYxh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKg0vYxh\App_KernelDevDebugContainer([
    'container.build_hash' => 'Kg0vYxh',
    'container.build_id' => 'e08af6ca',
    'container.build_time' => 1705932495,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKg0vYxh');
