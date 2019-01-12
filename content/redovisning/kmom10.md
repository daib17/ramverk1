---
---

Kmom10
-------------------------

Krav 1, 2, 3: Grunden
-------------------------
My project is called *All About MotoGP*, a forum where users can share information about motorbike racing competitions. Users can write questions, reply to answers and post comments to both questions and answers. New users can register an account and must log in before being able to post questions, answers or comments.
The site's layout is based on the same layout that I used in my redovisning page. One menu bar on top with five tabs (home, questions, tags, users and about) and an icon with a submenu with options to register and log in. Once a user has created an account and logged in, the profile menu (icon) displays the user's acronym with options to update the account details and log out from the site.

The *home* tab includes three tables with the latest questions, popular tags and the most active users. Every entry on each table gets displayed as a link.
The *questions* tabs shows a list with all the questions in the database with information like title, user and date of creation. Every question title is a link to a page that shows the specific question, answers to the question and comments.
The *tags* menu shows a list with all the tags in the database sorted alphabetically with links to the questions related to the specific tags.
The *users* tab contains a table with all the users in the database. It includes information like acronym, name, email, date of creation and avatar.
The *about* tab contains information about the site, a link to the course in BTH's website and a link to the GitHub repository.

The GitHub repository includes a README.md file with instructions on how to install and configure the webpage and its database, and badges for continuous integration tools like Travis, Scrutiziner and CodeClimate.

The database contains five tables: User, Question, Answer, Comment and Tag. The project includes sql files in the `sql/` folder to setup the database, create the tables and insert dummy data into the database.


Allmänt om projektet
-------------------------
I began my project by planning the database. The table configuration is very straight forward, with the exception of the Comment table. I had to figure out how to tell apart comments to answers from comments to questions. I solved this by including two columns: questionid and answerid. Comments to questions use the questionid field, leaving the  answerid field as null, and the opposite for the comments to answers.

The page's layout uses a similar layout to the one I use in my redovisning page. It is nothing fancy, but I like that it is clean and easy to navigate.

I implemented the user registration, login and logout first using the `anax/htmlform` module from week five. I also used this module for the other forms used in the application for posting questions, answers and comments. That really helped speeding up the boring task of creating the forms. I left the design untouched other than adding some padding to the input fields.

I used the `anax/database-active-record` module to take care of the database operations. I found its interface (methods) a little bit confusing to use and somehow limited, so I ended up mixing calls to ActiveRecordModel methods with calls to methods from the Database class itself.

This project has been interesting and it has forced me to go back to some important parts of the course, go through some of the assignments and it helped me get a better understanding of the code behind the framework and some of its modules.

I dedicated more hours to this project than I had expected when I first read the description, even so I didn't have the time to work with the optional parts. I added some extra functionality that registers the number of posts per user, so I can display the most active users on the home page, but not enough to fulfill the optional requirement number five.      


Allmänt om kursen
-------------------------
The materials for the course, lectures, videos and exercises have been very good as usual during this education. The feedback from Niklas has always been quick, positive and helpful.

I have learned some interesting concepts during this course and in general it has been a good course. Having said that, I must admit that in several occasions I got frustrated with anax. It could have been the lack of documentation or maybe just that I don't know where to look for it, but every time I checked Laravel, Symfony or any other standard framework I felt that working with any of them instead would have made this course even more interesting, less frustrating and more enjoyable.

On the other hand, I also have to say that whenever I posted a question in Gitter, I got quick help from teachers and/or classmates. My problem is that many hours always go into trying to figure out a problem with the framework before calling for help.

I would give this course a 5/10.
