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
class SalarydailyCollection extends Collection
        implements \MVC\Domain\SalarydailyCollection {
			function targetClass( ) {
				return "\MVC\Domain\Salarydaily";
			}
		}
class CategoryCollection extends Collection
        implements \MVC\Domain\CategoryCollection {
			function targetClass( ) {
				return "\MVC\Domain\Category";
			}
		}
class PositionsCollection extends Collection
        implements \MVC\Domain\PositionsCollection {
			function targetClass( ) {
				return "\MVC\Domain\Positions";
			}
		}
?>
