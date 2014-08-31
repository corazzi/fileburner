# FileBurner

FileBurner is a tool that allows you to share files once, and only once.

## Usage
###Database
You will need a database table with the following columns:

`id`

`secret`

`filename`

`owner_ip`

`permitted_ip`

`filesize`

`created_at`

`updated_at`

`deleted_at`

By default, the table name is `files`, but you can use any table name by adding the following property to `app/models/Files.php`:

` protected $table = 'my_table';`

Set your database configuration up in `app/config/database.php`.

###Upload Limit
You can set your own custom uploads limit (the default is 2GB). I recommend you also set up an upload limit on the server where you host the tool.

You will need to change values in:

`app/controllers/FileController.php`

`public/assets/js/app.js`