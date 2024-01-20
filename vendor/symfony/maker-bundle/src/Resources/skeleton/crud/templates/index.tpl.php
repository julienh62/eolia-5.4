<?= $helper->getHeadPrintCode($entity_class_name.' index'); ?>

{% block body %}
    <h1><?= $entity_class_name ?> index</h1>

    <table class="table">
        <thead>
            <tr>
<?php foreach ($entity_fields as $field): ?>
                <th><?= ucfirst($field['fieldName']) ?></th>
<?php endforeach; ?>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for <?= $entity_twig_var_singular ?> in <?= $entity_twig_var_plural ?> %}
            <tr>
<?php foreach ($entity_fields as $field): ?>
                <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
<?php endforeach; ?>
                <td>
                    <a href="{{ path('<?= $route_name ?>_show', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}">show</a>
                    <a href="{{ path('<?= $route_name ?>_edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}">modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan="<?= (count($entity_fields) + 1) ?>">Aucune correspondance trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href="{{ path('<?= $route_name ?>_new') }}">Créer </a>
{% endblock %}
