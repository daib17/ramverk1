---
title: "Redovisning"
---
Redovisning
=========================


Kmom01
-------------------------

**Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under kursen och det kommande året.**

Going through the content in "PHP The Right Way", I see that at this moment I've got a decent understanding of the basics but I still have a long road in front of me. For instance, there are areas that we've been working with during the education, like databases, error handling, documentation or testing, that I am familiar with but far from confident. Other areas like templating, deployment or virtualization are completely new to me. My goal for this course and the rest of the education is to consolidate the basics and get better understanding of the core parts of the language.  

**Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?**

According to the "Best PHP Frameworks for 2014", Laravel, Phalcon and Symfony2 were the top three frameworks at that moment. In 2018, Laravel is still the most used framework by far with 43.7% of the total for all frameworks. Then we have three frameworks fighting for the second position: CodeIgniter (14,9%), Symfony (13.6%) and Zend (12.5%). Other frameworks mentioned in this article are Yii2, CakePHP, FuelPHP, FatFree and Aura.

Some of the pros and cons for our top frameworks are the following:

Laravel is good for rapid application development, it supports MVC architecture, unit testing and it has very good documentation, but it does not work on shared hosting plans.

CodeIgniter supports normal web hosting with standard databases and it has good documentation, but it is not very friendly towards unit testing.

Symfony is well documented, its performance is very good and it is mature and stable, but it has a steep learing curve and it does not support MVC.

Zend is ideal for enterprise applications, it is object oriented, but it's not ideal for rapid application development.

Source:
https://coderseye.com/best-php-frameworks-for-web-developers/

**Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.**

I do not have much experience with communities other than ending up in Stack Overflow every time I am stuck in my code. I think it is a fantastic resource for quick fixes. As a beginner it can be difficult to separate the good answers from the bad. The voting system helps in that regard. Sometimes it is not even about the quality of the code, but to identify whether a suggested solution is appropriate for your specific problem.  

Another resource that I use frequently is the Ubuntu community forums. A fantastic resource for all Ubuntu/Linux in the open source community that got me out of trouble in many occasions.

I am a strong supporter of the open source community, for now just as a user but I hope in the future as a contributor also.    

**Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?**

A framework-less world where applications are build by selecting specific libraries for a project instead of being limited to a sometimes bloated framework seems a good idea to me. As a beginner I can benefit from the structure that a framework provides, but I can see the appeal for more experience developers of selecting just those specific libraries that are more appropriate for the a project without the limitations or impositions of any framework.

**Hur gick det att komma igång med din redovisa-sida?**

It went fine, but I chose to go for a simple layout with a simple stylesheet. I might update it during the course if I manage to catch up with the calendar, but it does the job for now.

**Några funderingar kring arbetet med din kontroller?
Vilken är din TIL för detta kmom?**

For the IP validation I played around with regex and the online tester at www.regex101.com, but I ended using the `filter_var` function to validate the addresses. I struggled a bit with the testing part of the assignment. It got a bit easier once I saw Mikael's suggestion in Gitter about using the `set_globals` function. My TIL for this week must be learning a bit about the different frameworks in PHP and an interesting peek into the PHP community.  

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

Kmom03
-------------------------

**Hur känns det att jobba med begreppen kring $di?**


**Ge din egna korta förklaring, ett kort stycke, om dependency injection, service locator och lazy loading. Berätta gärna vilka källor du använde för att lära dig om begreppen.**


**Berätta hur andra ramverk (minst 1) använder sig av koncept som liknar $di. Liknar det “vårt” sätt?**


**Berätta lite om hur du löste uppgiften, till exempel vilka klasser du gjorde, om du gjorde refaktoring på äldre klasser och vad du valde att lägga i $di.**


**Har du någon reflektion kring hur det är att jobba med externa tjänster (ipvalidering, kartor, väder)?**


**Vilken är din TIL för detta kmom?**
