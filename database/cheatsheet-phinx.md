## working with columns

Column types are specified as strings and can be one of:

- binary
- boolean
- char
- date
- datetime
- decimal
- float
- double
- smallinteger
- integer
- biginteger
- string
- text
- time
- timestamp
- uuid

### schema tabel

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('cart_items');
        $table->addColumn('user_id', 'integer')
        ->addColumn('product_id', 'integer', ['limit' => 40])
        ->addColumn('subtype_id', 'integer', ['limit' => 40])
        ->addColumn('quantity', 'integer', ['limit' => 40])
        ->create();
        }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
```

## working with table

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('tableName');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}


```


## working with index

```

<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('city', 'string')
              ->addIndex(['city'])
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}

```


### working with Foreign keys

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('tags');
        $table->addColumn('tag_name', 'string')
              ->save();

        $refTable = $this->table('tag_relationships');
        $refTable->addColumn('tag_id', 'integer', ['null' => true])
                 ->addForeignKey('tag_id', 'tags', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                 ->save();

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}

```

## checking whether a column exists

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function change()
    {
        $table = $this->table('user');
        $column = $table->hasColumn('username');

        if ($column) {
            // do something
        }

    }
}

```

## renaming column

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->renameColumn('bio', 'biography');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('users');
        $table->renameColumn('biography', 'bio');
    }
}

```

## Adding a Column After Another Column

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Change Method.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('city', 'string', ['after' => 'email'])
              ->update();
    }
}
```

## Changing Column Attributes

```
<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->changeColumn('email', 'string', ['limit' => 255])
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}

```

### Query builder phinx

```
use Phinx\Migration\AbstractMigration;
$database = new AbstractMigration;

// fetch a user
$row = $database->fetchRow('SELECT * FROM users');

// fetch an array of messages
$rows = $database->fetchAll('SELECT * FROM messages');

// inserting only one row
$singleRow = [
    'id'    => 1,
    'name'  => 'In Progress'
];

$table = $database->table('status');
$table->insert($singleRow);
$table->saveData();

// inserting multiple rows
$rows = [
    [
        'id'    => 2,
        'name'  => 'Stopped'
    ],
    [
        'id'    => 3,
        'name'  => 'Queued'
    ]
];

$database->table('status')->insert($rows)->save();

```