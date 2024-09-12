# Laravel Lucky Number Game

This project is a simple Laravel-based web application where users can register, get a unique link, try their luck and view the history of their attempts.

## Installation

Follow these steps to install the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/your-repository.git
cd your-repository
```

## 2. Set up dependencies
```bash 
composer install
```
### 3. Create an .env file

```bash 
cp .env.example .env
```

### 4. Generate an application key

```bash
php artisan key:generate
```

### 5. Run migrations
```bash 
php artisan migrate
```

### 6. Start local server 
```bash 
php artisan serve
```
##Usage
###Registration
On the main page you will see a registration form with Username and Phonenumber fields. After successful registration the user will be provided with a unique link to access a special page (page A).

###Page A
On page A, the user can:

Generate a new unique link: Click the “Generate New Link” button to create a new unique link.

<u>Deactivate Link:</u> Click the “Deactivate Link” button to invalidate the current link.

Try Luck: Click the <u>“I'm Feeling Lucky”</u> button to get a random number and find out the result.

<u>View History:</u> Click the “History” button to see the last 3 results.
Results Page

After clicking the <u>“I'm Feeling Lucky”</u> button, you will be redirected to the results page where the results are displayed:

Random Number </br>
Result (Win/Lose) </br>
Win amount </br>
History </br>
The history page displays the last 3 results of “I'm Feeling Lucky” attempts for the current user.

##Project structure
####<u>Controllers:</u> Logic of query processing and interaction with models.
####<u>Models:</u> Definition of the data structure and communication with the database.
####<u>Views:</u> HTML templates for displaying data to the user.
####<u>Routes:</u> Definition of paths and routes for query processing.
