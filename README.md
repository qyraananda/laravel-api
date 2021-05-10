# Laravel-api

This is a simple RESTful API which is used to create CRUDs (create, read, update, delete).

# How to use

+--------+----------+------------------+------+------------------------------------------------+------------+
| Domain | Method   | URI              | Name | Action                                         | Middleware |
+--------+----------+------------------+------+------------------------------------------------+------------+
|        | GET|HEAD | /                |      | Closure                                        | web        |
|        | GET|HEAD | api/testing      |      | App\Http\Controllers\TestingController@index   | api        |
|        | POST     | api/testing      |      | App\Http\Controllers\TestingController@create  | api        |
|        | PUT      | api/testing/{id} |      | App\Http\Controllers\TestingController@@update | api        |
|        | DELETE   | api/testing/{id} |      | App\Http\Controllers\TestingController@@delete | api        |
|        | GET|HEAD | api/user         |      | Closure                                        | api        |
|        |          |                  |      |                                                | auth:api   |
+--------+----------+------------------+------+------------------------------------------------+------------+
