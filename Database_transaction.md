#### 17/7/2020
### Transaction 
- A transaction is an action or series of actions that are being performed by a single user or application program, which reads or updates the contents of the database.

- A transaction can be defined as a logical unit of work on the database. This may be an entire program, a piece of a program, or a single command (like the SQL commands such as INSERT or UPDATE), and it may engage in any number of operations on the database. In the database context, the execution of an application program can be thought of as one or more transactions with non-database processing taking place in between.
#### Properties of Transactions
Transactions have the following four standard properties, usually referred to by the acronym ACID.

- Atomicity − ensures that all operations within the work unit are completed successfully. Otherwise, the transaction is aborted at the point of failure and all the previous operations are rolled back to their former state.

- Consistency − ensures that the database properly changes states upon a successfully committed transaction.

- Isolation − enables transactions to operate independently of and transparent to each other.

- Durability − ensures that the result or effect of a committed transaction persists in case of a system failure.

Transaction Control
The following commands are used to control transactions.

- COMMIT − to save the changes.

- ROLLBACK − to roll back the changes.

- SAVEPOINT − creates points within the groups of transactions in which to ROLLBACK.
>  SQL> SAVEPOINT SP1;
Savepoint created.
> SQL> DELETE FROM CUSTOMERS WHERE ID=1;
1 row deleted.
> SQL> SAVEPOINT SP2;
Savepoint created.
> SQL> DELETE FROM CUSTOMERS WHERE ID=2;
1 row deleted.
> SQL> SAVEPOINT SP3;
Savepoint created.
> SQL> DELETE FROM CUSTOMERS WHERE ID=3;
1 row deleted.

- SET TRANSACTION − Places a name on a transaction.
