<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}
interface CategoryCollection extends \Iterator {function add( Object $Category );}
interface SalaryDailyCollection extends \Iterator {function add( Object $SalaryDaily );}
interface PositionsCollection extends \Iterator {function add( Object $Positions );}
interface NewsCollection extends \Iterator {function add( Object $News );}

?>