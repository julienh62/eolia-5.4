<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJAoZZ27\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJAoZZ27/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJAoZZ27.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJAoZZ27\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJAoZZ27\App_KernelDevDebugContainer([
    'container.build_hash' => 'JAoZZ27',
    'container.build_id' => '54cd783a',
    'container.build_time' => 1709405979,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJAoZZ27');
