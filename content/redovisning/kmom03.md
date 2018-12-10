---
---

Kmom03
-------------------------

**Hur känns det att jobba med begreppen kring $di?**

It feel goods to finally understand what $di does and how it does it. The structure of the configuration files seems a bit confusing at first, but it is not that complicated once it "clicks". I can see that a service containers provides a nice way to manage class dependencies and dependency injections while keeping a good structured code.  


**Ge din egna korta förklaring, ett kort stycke, om dependency injection, service locator och lazy loading. Berätta gärna vilka källor du använde för att lära dig om begreppen.**

Dependency Injection is a technique where a dependency (an object) is pushed (passed) into another object that would use it. The object is passed to the client via a constructor or set method instead of the client instantiating the object.  

Service Locator is a container or map of all the dependencies and the logic to create the dependencies. Every time we ask for a dependency, the service locator looks for the dependency to use.

Lazy loading is a design pattern that improves performance by  delaying initialization of an object until the program needs the object. The opposite of lazy loading is eager loading.

The resources that I used to learn about these concepts were the Wikipedia articles provided in the instructions and the weekly lecture.


**Berätta hur andra ramverk (minst 1) använder sig av koncept som liknar $di. Liknar det “vårt” sätt?**

Laravel gives access to the service container via the <code>$this->app</code> property. Services are registered using the <code>bind</code> method passing the class or interface to be registered. To resolve a class out of the container we use the make <code>method</code> with the name of the class or interface to resolve.

I haven't been able to go deeper in any of these frameworks yet, but it looks like both Laravel and Symfony use service containers as a way to handle services that may vary in syntaxis or implementation, but in the end it provides similar functionality as the one in our framework does.  


**Berätta lite om hur du löste uppgiften, till exempel vilka klasser du gjorde, om du gjorde refaktoring på äldre klasser och vad du valde att lägga i $di.**

I created a wrapper class (MyCurl) for the cURL methods and I added it as a service in the dependency injector container. This service gets injected via the constructor in the ForecastAPI class, a class that handles the communication with the weather forecast Dark Sky API. This class handles single and multiple concurrent requests for the week and for the last month forecast respectively.
The access keys for the APIs are stored in the config/apikeys.php file.
I created two controller classes: ForecastController that handle requests and displays standard output information and ForecastJsonController that has the same functionality but displays the output in JSON format.
I did a bit of refactoring in my IPStackAPI and GeoController classes so they can access the API access key via the configuration file now instead of being hard coded in the class.


**Har du någon reflektion kring hur det är att jobba med externa tjänster (ipvalidering, kartor, väder)?**

It's been interesting and for the most part cool working with external APIs. IPStack and DarkSky provide good documentation and both were quite straight forward to integrate in the project. OpenStreetMap, in the other hand, seems to be a project with much bigger scope and the documentation is kind of cumbersome to navigate. I used OpenLayers library to visualize the maps.


**Vilken är din TIL för detta kmom?**

This week's subject was Dependency Injection. I came with a vague idea of what this concept meant, but now I think I understand better what DI is and, more important, how our framework implements it.
