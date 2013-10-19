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
interface PositionsFinder  extends Finder {}
interface SalarydailyFinder  extends Finder {}
interface PageFinder  extends Finder {}
?>
