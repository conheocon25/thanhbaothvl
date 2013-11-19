<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface AskCollection extends \Iterator {function add( Object $Ask );}
interface AlbumCollection extends \Iterator {function add( Object $Album );}

interface UserCollection extends \Iterator {function add( Object $user );}
interface CategoryCollection extends \Iterator {function add( Object $Category );}
interface CategoryVideoCollection extends \Iterator {function add( Object $CategoryVideo );}
interface CategoryAskCollection extends \Iterator {function add( Object $CategoryAsk );}
interface CategoryNewsCollection extends \Iterator {function add( Object $CategoryNews );}

interface VideoLibraryCollection extends \Iterator {function add( Object $VideoLibrary );}
interface VideoCollection extends \Iterator {function add( Object $Video );}

interface SalaryDailyCollection extends \Iterator {function add( Object $SalaryDaily );}
interface PositionsCollection extends \Iterator {function add( Object $Positions );}
interface NewsCollection extends \Iterator {function add( Object $News );}
interface ConfigCollection extends \Iterator {function add( Object $Config );}
interface GuestCollection extends \Iterator {function add( Object $Guest );}
interface PageCollection extends \Iterator {function add( Object $Page );}
interface PageNavigationCollection extends \Iterator {function add( Object $PageNavigation );}
?>