---
---

Kmom06
-------------------------
**Hur är din syn på modulen anax/htmlform och det koncept som modulen försöker lösa?**

The anax/htmlform can make the tedious task of creating forms easier, saving a lot of time in the process. In this particular example, I find interesting the use of an array as an argument that gives some flexibility when it comes to configuring the forms.       


**Kan du hitta liknande lösningar när du tittar på andra ramverk?**

In Laravel we can use the module <code>illuminate/html</code> that includes classes like FormBuilder and FormFacade that help us generate forms. Once we include this module in our Laravel application, we can create forms using tags like <code>{{ Form::open(array('url' => 'foo/bar')) }}
    //
{{ Form::close() }}</code>.


**Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?**

One major advantage of using Object Relational Mapping is that the interactions with the database are simplified since we don't need to keep writing SQL code for common operations.
Another advantage is that ORMs provide a high-level abstraction upon a relational database, which makes possible to switch an application between various relational databases. For instance, we were able to swap between MySQL and SQLite in our example this week with minimum changes in code.
One disadvantage could be losing a bit of control over the SQL code. I can think of an scenario where more complex queries might need extra SQL code for functionality that the ORM does not provide.



**När du undersökte andra ramverk, fann du motsvarigheter till Active Record och hur såg de ut?**

Laravel includes Eloquent ORM that implements the Active Record pattern. Eloquent ORM presents database tables and classes, with their object instances tied to single table rows.

Since Laravel 3, Query builder provides an alternative to Eloquent ORM, with a set of classes and methods capable of building queries programmatically.


**Vad tror du om begreppet scaffolding, ser du för- och nackdelar med konceptet?**

I see scaffolding as a script that generates a structure or skeleton of files and folders for an application or module. It can be used to quickly generate the base code for an application like in <code>anax create form ramverk1-me-v2</code> or to generate the base code for a CRUD module that can be integrated in an application like in <code>anax create src/Book ramverk1-crud-v2</code>.
Time saving is a major advantage by recycling code that has been previously used and tested. Integrating a structure of files and folders and our preexisting application can lead to problems that can be difficult to trace.    


**Hittade du motsvarighet till scaffolding i andra ramverk du tittade på?**

I found that Laravel provides built in scaffolding for the login process with authentication, routing, views and styling.
Laravel also provides basic scaffolding to make it easier to get started using Bootstrap and Vue libraries.


**Hur kan man jobba med enhetstestning när man scaffoldat fram en CRUD likt Book, vill du utvecklar några tankar kring det?**

I have no idea how testing CRUD operations is done, but I can guess that one way would be using a mock database.



**Vilken är din TIL för detta kmom?**

I learned that Active Record really simplifies working with databases. The use of arrays to configure forms in the anax/html module was also interesting.
