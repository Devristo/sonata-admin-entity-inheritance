# Steps to reproduce

```bash
docker-compose up -d
bin/console doctrine:schema:update --force
bin/console doctrine:fixtures:load -n
symfony serve
```
Then go to: https://127.0.0.1:8000/admin/app/sub/list

And you will see an error like this:

```
An exception has been thrown during the rendering of a template ("An exception occurred while executing 'SELECT b0_.id AS id_0, s1_.other_field AS other_field_1, b0_.discr AS discr_2 FROM sub s1_ INNER JOIN base b0_ ON s1_.id = b0_.id GROUP BY b0_.id ORDER BY b0_.id ASC LIMIT 32':

SQLSTATE[42803]: Grouping error: 7 ERROR: column "s1_.other_field" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT b0_.id AS id_0, s1_.other_field AS other_field_1, b0_...
^").
```

