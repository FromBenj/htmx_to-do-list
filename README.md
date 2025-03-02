# To-Do-LisX
### **_Small to-do-list project to learn HTMX and SQLite._**
The idea was to create a to-do list application with a simple user interface, a PHP backend and a SQLite database to store the tasks.

## Technologies

- PHP 8.3
- SQlite3
- HTMX 2
- Vanilla JS
- Bootstrap 5.0
- Font Awesome 6.7
- icanhazdadjoke API

## Features
- Add a new task
- Update a task
- Delete a task
- Delete all tasks
- Mark a task as done
- Mark a task as not done
- Check the done and remaining tasks
- Welcome page with the name of the user
- Get random dad jokes to start the day
- Possibility to change the background type

## Test the project
Go to your Terminal : 
```
git init
git clone https://github.com/FromBenj/To-do-lisX.git
cd To-do-lisX
php -S localhost:8000 -t public
```
Then open your favorite browser and go to [localhost:8000](http://localhost:8000)

## Nex steps 
- Fixing some bugs when marking as done a new added task
- Adding the background type choice to the localStorage
- Getting the possibility to arrange the tasks by weekday 
- Adding a drag and drop feature to change a task from a day to another
- Creating a User column in the database and a login page
- Making the app a PWA

## License
MIT
