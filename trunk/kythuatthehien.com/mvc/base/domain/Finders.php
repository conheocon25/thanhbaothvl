<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $obj );
    function insert( Object $obj );
    //function delete();
}
interface AppFinder  extends Finder {}
interface UserFinder  extends Finder {}
interface CategoryFinder  extends Finder {}
interface SalaryDailyFinder  extends Finder {}
interface PositionsFinder  extends Finder {}
interface NewsFinder  extends Finder {}
interface ConfigFinder  extends Finder {}
interface GuestFinder  extends Finder {}
?>