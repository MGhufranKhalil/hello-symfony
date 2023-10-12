# Learn Symfony

## Install Scoop 
What is scoop? It is package manager like other package manager 


## Install symfony cli using scoop
cmd: scoop install symfony-cli


# Create New Symfony Application
For Web App
cmd: symfony new --webapp my_project 

For Microservices, APIs or console application
cmd: symfony new my_project 


## DIRECTORY:
 

...


## Controller
 
Same as other


# Route

There are 2 methods to write routes in symfony

1. config/routes.yaml


# config/routes.yaml

the "app_lucky_number" route name is not important yet
app_lucky_number:
    path: /lucky/number
    controller: App\Controller\FirstController::number


2. 
Route Will be define before method in side controller using 

    #[Route('/')] for php ^8

for before php 8

    /**
    * @Route("/lucky/number")
    */	

Route use statement should be added on the top of the file



## Response

    return new Response('messsage')

Response use statement should be added on top of the file 

## Templates

For UI symfony use twig it is more like JS

### Twig Uses 

Print variable 
    {{ variableName }}

Comment
    {# This is comment #}

Do something 
    {% if %} {% endif %}, {%for ()%} {% endfor%} etc

Templating

For extends
    {% extends 'base.html.twig' %}

Content That needs to be extended
    {% block body %} {% endblock %}
    
For more learning check https://twig.symfony.com/


