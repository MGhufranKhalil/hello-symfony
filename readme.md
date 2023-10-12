Symfony

Installation:
============

# Install Scoop 
What is scoop? It is package manager like other package manager 


# Install symfony cli using scoop
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

# the "app_lucky_number" route name is not important yet
app_lucky_number:
    path: /lucky/number
    controller: App\Controller\LuckyController::number


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



