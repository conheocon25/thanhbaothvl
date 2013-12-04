<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}

interface UserFinder  extends Finder {}
interface CategoryFinder  extends Finder {}
interface CustomerFinder  extends Finder {}
interface HotNumberFinder  extends Finder {}
interface NetworkFinder  extends Finder {}
interface NumberFinder  extends Finder {}
interface OrderFinder  extends Finder {}
interface PageFinder  extends Finder {}
interface HeadNetworkFinder  extends Finder {}

?>
