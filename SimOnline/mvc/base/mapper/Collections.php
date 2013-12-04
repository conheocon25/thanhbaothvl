<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php" ); 
require_once( "mvc/base/mapper/Collection.php" ); 

class UserCollection extends Collection
        implements \MVC\Domain\UserCollection {
			function targetClass( ) {
				return "\MVC\Domain\User";
			}
		}
class PageCollection extends Collection
        implements \MVC\Domain\PageCollection {
			function targetClass( ) {
				return "\MVC\Domain\Page";
			}
		}
class HeadNetworkCollection extends Collection
        implements \MVC\Domain\HeadNetworkCollection {
			function targetClass( ) {
				return "\MVC\Domain\HeadNetwork";
			}
		}
class CategoryCollection extends Collection
        implements \MVC\Domain\CategoryCollection {
			function targetClass( ) {
				return "\MVC\Domain\Category";
			}
		}
class CustomerCollection extends Collection
        implements \MVC\Domain\CustomerCollection {
			function targetClass( ) {
				return "\MVC\Domain\Customer";
			}
		}
class HotNumberCollection extends Collection
        implements \MVC\Domain\HotNumberCollection {
			function targetClass( ) {
				return "\MVC\Domain\HotNumber";
			}
		}
class NetworkCollection extends Collection
        implements \MVC\Domain\NetworkCollection {
			function targetClass( ) {
				return "\MVC\Domain\Network";
			}
		}
class NumberCollection extends Collection
        implements \MVC\Domain\NumberCollection {
			function targetClass( ) {
				return "\MVC\Domain\Number";
			}
		}
class OrderCollection extends Collection
        implements \MVC\Domain\OrderCollection {
			function targetClass( ) {
				return "\MVC\Domain\Order";
			}
		}
?>
