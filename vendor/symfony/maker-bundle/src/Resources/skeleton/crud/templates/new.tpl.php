<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block body %}
    <h1>Créer  <?= $entity_class_name ?></h1>

    {{ include('<?= $templates_path ?>/_form.html.twig') }}

    <a href="{{ path('<?= $route_name ?>_index') }}">Retour à la liste</a>
{% endblock %}
