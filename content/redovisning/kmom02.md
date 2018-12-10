---
---

Kmom02
-------------------------

**Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?**

I do not have much practical experience with MVC, but the Model View Controller is a recurring concept in every programming course or book that I can remember.
My previous understanding of the MVC paradigm comes from desktop applications so it is a bit different. Mikael uses diagrams in its article to explain how in PHP the controller handles requests, uses the model and updates the view. In desktop applications, the controller manipulates the model, but it is the model that updates the views.     

MVC is a software pattern that uses a modular architecture. It helps organize the code. It makes it easier to update, change or modify a module without affecting the others. Developers can be assigned to different areas in a project according to their competences. In this way frontend, middleware and backend developers can be assigned to the view, controller and model modules respectively. MVC also reduces the application's complexity so its code becomes easier to understand, develop and maintain.

My source for reading about MVC this week has mainly been Mikael's article about MVC in dbwebb's kunskapsbanken.  

**Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?**

S.O.L.I.D is an acronym for five object oriented principles:

Single responsibily principle means that a class should have only one job. Open-close principle means that a class should be easy to extend without having to modify it. Liskov substitution principle requires objects of a subclass to behave in the same way as the objects of the superclass. Interface segregation principle is related to the first principle and it means to keep your interfaces lean, do not impose unneeded methods. Dependency inversion principle means to decouple high levels from low level modules by using abstractions.

My main source as been Mikael's lecture for the week.

**Har du någon erfarenhet av designmönster och kan du nämna och kort förklara några designmönster du hört talas om?**

A few years ago I did one course in Design Patterns in C++. This course used Erich Gamma's classic book. We went though some of the most common patterns, but I remember this course as being very theoretical and myself having difficulties to implement many of the patterns in real case scenarios. These are a few of the design patterns that I still remember:

The singleton pattern that makes sure than only one object of a class can be created.

The factory pattern that provides a way of creating objects without exposing the logic to the client.

The observer pattern where objects called observers register themselves to be notified when another object is changed.      

**Vilket ramverk valde du att studera manualen för och fann du något intressant?**

I checked the documentation for both Laravel and Symfony frameworks. It is hard to tell before getting started in a project and actually using the documentation, but it seems that both frameworks have good and well organized documentation. I browsed through the getting started sections, routing, controllers and testing, and I have to say that the first impression is that the structure and code look look pretty familiar after a while working with Anax.   

**Vilken är din TIL för detta kmom?**

It's been especially interesting to read about some of the most popular frameworks in PHP and how they compare.
