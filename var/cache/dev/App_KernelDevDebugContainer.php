<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSRSWuVr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSRSWuVr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSRSWuVr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSRSWuVr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSRSWuVr\App_KernelDevDebugContainer([
    'container.build_hash' => 'SRSWuVr',
    'container.build_id' => '39a753cb',
    'container.build_time' => 1707581620,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSRSWuVr');
