{% extends 'partials/body.twig.php' %}

{% block title %}Home do framework {% endblock %}

{% block body %}
<div class="container bg-white">
    <div class="card border-danger mb-3">
        <div class="card-header">{{title}}</div>
        <div class="card-body">
            
            <p class="card-text">{{message}}</p>
        </div>
    </div>
</div>
{% endblock %}