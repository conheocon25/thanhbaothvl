<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class AskCollection extends Collection implements \MVC\Domain\AskCollection {function targetClass( ) {return "\MVC\Domain\Ask";}}
class AlbumCollection extends Collection implements \MVC\Domain\AlbumCollection {function targetClass( ) {return "\MVC\Domain\Album";}}

class CategoryCollection extends Collection implements \MVC\Domain\CategoryCollection {function targetClass( ) {return "\MVC\Domain\Category";}}
class CategoryAskCollection extends Collection implements \MVC\Domain\CategoryAskCollection {function targetClass( ) {return "\MVC\Domain\CategoryAsk";}}
class CategoryVideoCollection extends Collection implements \MVC\Domain\CategoryVideoCollection {function targetClass( ) {return "\MVC\Domain\CategoryVideo";}}
class CategoryNewsCollection extends Collection implements \MVC\Domain\CategoryNewsCollection {function targetClass( ) {return "\MVC\Domain\CategoryNews";}}

class VideoLibraryCollection extends Collection implements \MVC\Domain\VideoLibraryCollection {function targetClass( ) {return "\MVC\Domain\VideoLibrary";}}
class VideoCollection extends Collection implements \MVC\Domain\VideoCollection {function targetClass( ) {return "\MVC\Domain\Video";}}

class PositionsCollection extends Collection implements \MVC\Domain\PositionsCollection {function targetClass( ) {return "\MVC\Domain\Positions";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}
class SalaryDailyCollection extends Collection implements \MVC\Domain\SalaryDailyCollection {function targetClass( ) {return "\MVC\Domain\SalaryDaily";}}

class NewsCollection extends Collection implements \MVC\Domain\NewsCollection {function targetClass( ) {return "\MVC\Domain\News";}}
class ConfigCollection extends Collection implements \MVC\Domain\ConfigCollection {function targetClass( ) {return "\MVC\Domain\Config";}}
class GuestCollection extends Collection implements \MVC\Domain\GuestCollection {function targetClass( ) {return "\MVC\Domain\Guest";}}
class PageCollection extends Collection implements \MVC\Domain\PageCollection {function targetClass( ) {return "\MVC\Domain\Page";}}
class ReportCollection extends Collection implements \MVC\Domain\ReportCollection {function targetClass( ) {return "\MVC\Domain\Report";}}
class ScheduleCollection extends Collection implements \MVC\Domain\ScheduleCollection {function targetClass( ) {return "\MVC\Domain\Schedule";}}

?>
