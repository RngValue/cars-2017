# cars-2017
a simple php webapp for querying cars by car brand

this is just the php code. I also use a mysql database with a "cars" table, which is loaded with cars from a csv file, which I don't know the source of, and a "distinct_cars" view. I think you can guess what that view contains

if you really want to try it out, here's the structure of the "distinct_cars" view. Also, the database's name is "vroom" (very creative I know)

 **Name** | **Type**
---|---
make | text
model | text
year | int(11)
fuel | text
transmission | text
category | text
popularity | int(11)