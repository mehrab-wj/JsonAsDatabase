# Json As Database
Use json az database for small projects with this class

## Installation 
First load the class via ```include_once``` or ```require_once```:
```php
include_once("json_db.php");
```
Then create variable and load the class:
```php
$database = new JsonDatabase('your_json_path.json'); // or even you can use url as a path
```
## Usage
Now everything is ready to use!

### Loading data:
```php
echo $database->db->data_key;
```
### Saving data
```php
$database->db->data_key = "Hello world!";
```
## Options
The class has auto save option, and its turned on by default. it means everytime you change value, the class will save it.

But for turning off the auto save, just add ```fase``` as seconed parameter, Example:
```php
$database = new JsonDatabase('your_json_path.json',false); // By adding false as second parameter, we Disable auto save option
```
Now if you edit a key, you show call ```save()``` function, Example:
```php
$database = new JsonDatabase('your_json_path.json',false);
$database->db->data_key = "Hello world!";
$database->save();
```
