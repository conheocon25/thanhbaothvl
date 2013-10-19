<?php
namespace MVC\Domain;

interface UserCollection extends \Iterator {
    function add( Object $user );	
}
interface PageCollection extends \Iterator {
    function add( Object $Page );	
}
interface PositionsCollection extends \Iterator {
    function add( Object $Positions );	
}
interface CategoryCollection extends \Iterator {
    function add( Object $Category );	
}
interface SalarydailyCollection extends \Iterator {
    function add( Object $Salarydaily );	
}
?>
