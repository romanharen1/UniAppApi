`
Rotas da api:

````+--------+----------+----------------------+----------+--------------------------------------------------------------------------+------------------+
| Domain | Method   | URI                  | Name     | Action                                                                   | Middleware       |
+--------+----------+----------------------+----------+--------------------------------------------------------------------------+------------------+
|        | GET|HEAD | /                    |          | Closure                                                                  | web              |
|        | GET|HEAD | api                  |          | Closure                                                                  | api              |
|        | POST     | api/auth/login       | login    | App\Http\Controllers\Auth\AuthController@login                           | api              |
|        | POST     | api/auth/recovery    |          | App\Http\Controllers\Auth\ForgotPasswordController@sendPasswordResetLink | api              |
|        | POST     | api/auth/register    | register | App\Http\Controllers\Auth\RegisterController@register                    | api              |
|        | POST     | api/auth/reset       |          | App\Http\Controllers\Auth\ResetPasswordController@callResetPassword      | api              |
|        | POST     | api/client           | clients  | App\Http\Controllers\Api\ClientController@store                          | api,jwt,jwt.auth |
|        | GET|HEAD | api/client           | clients  | App\Http\Controllers\Api\ClientController@index                          | api,jwt,jwt.auth |
|        | PUT      | api/client/{id}      | clients  | App\Http\Controllers\Api\ClientController@update                         | api,jwt,jwt.auth |
|        | GET|HEAD | api/client/{id}      | clients  | App\Http\Controllers\Api\ClientController@show                           | api,jwt,jwt.auth |
|        | POST     | api/event            | events   | App\Http\Controllers\Api\EventController@store                           | api,jwt,jwt.auth |
|        | GET|HEAD | api/event            | events   | App\Http\Controllers\Api\EventController@index                           | api,jwt,jwt.auth |
|        | DELETE   | api/event/{id}       | events   | App\Http\Controllers\Api\EventController@destroy                         | api,jwt,jwt.auth |
|        | GET|HEAD | api/event/{id}       | events   | App\Http\Controllers\Api\EventController@show                            | api,jwt,jwt.auth |
|        | PUT      | api/event/{id}       | events   | App\Http\Controllers\Api\EventController@update                          | api,jwt,jwt.auth |
|        | POST     | api/host             | hosts    | App\Http\Controllers\Api\HostController@store                            | api,jwt,jwt.auth |
|        | GET|HEAD | api/host             | hosts    | App\Http\Controllers\Api\HostController@index                            | api,jwt,jwt.auth |
|        | GET|HEAD | api/host/{id}        | hosts    | App\Http\Controllers\Api\HostController@show                             | api,jwt,jwt.auth |
|        | PUT      | api/host/{id}        | hosts    | App\Http\Controllers\Api\HostController@update                           | api,jwt,jwt.auth |
|        | POST     | api/logout           | logout   | App\Http\Controllers\Auth\LogoutController@logout                        | api,jwt,jwt.auth |
|        | PUT      | api/profile          | profile  | App\Http\Controllers\Profile\ProfileController@update                    | api,jwt,jwt.auth |
|        | GET|HEAD | api/profile          | profile  | App\Http\Controllers\Profile\ProfileController@me                        | api,jwt,jwt.auth |
|        | PUT      | api/profile/password | profile  | App\Http\Controllers\Profile\ProfileController@updatePassword            | api,jwt,jwt.auth |
|        | GET|HEAD | api/ticket           | tickets  | App\Http\Controllers\Api\TicketController@index                          | api,jwt,jwt.auth |
|        | POST     | api/ticket           | tickets  | App\Http\Controllers\Api\TicketController@store                          | api,jwt,jwt.auth |
|        | GET|HEAD | api/ticket/{id}      | tickets  | App\Http\Controllers\Api\TicketController@show                           | api,jwt,jwt.auth |
|        | PUT      | api/ticket/{id}      | tickets  | App\Http\Controllers\Api\TicketController@update                         | api,jwt,jwt.auth |
+--------+----------+----------------------+----------+--------------------------------------------------------------------------+------------------+

`````
