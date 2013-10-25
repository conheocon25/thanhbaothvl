<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class CategoryCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\Category";}}
class PositionsCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\Positions";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}
class SalaryDailyCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\SalaryDaily";}}

class NewsCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\News";}}
class ConfigCollection extends Collection implements \MVC\Domain\ConfigCollection {function targetClass( ) {return "\MVC\Domain\Config";}}
class GuestCollection extends Collection implements \MVC\Domain\GuestCollection {function targetClass( ) {return "\MVC\Domain\Guest";}}

?>
