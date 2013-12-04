<?php
namespace MVC\Domain;

interface UserCollection extends \Iterator {
    function add( Object $user );	
}
interface PageCollection extends \Iterator {
    function add( Object $Page );	
}
interface HeadNetworkCollection extends \Iterator {
    function add( Object $HeadNetwork );	
}
interface CategoryCollection extends \Iterator {
    function add( Object $Category );	
}
interface CustomerCollection extends \Iterator {
    function add( Object $Customer );	
}
interface HotNumberCollection extends \Iterator {
    function add( Object $HotNumber );	
}
interface NetworkCollection extends \Iterator {
    function add( Object $Network );	
}
interface NumberCollection extends \Iterator {
    function add( Object $Number );	
}
interface OrderCollection extends \Iterator {
    function add( Object $Order );	
}

?>
