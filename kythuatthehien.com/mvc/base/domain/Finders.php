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
interface AskFinder  extends Finder {}
interface AlbumFinder  extends Finder {}
interface UserFinder  extends Finder {}

interface CategoryFinder  extends Finder {}
interface CategoryAskFinder  extends Finder {}
interface CategoryVideoFinder  extends Finder {}
interface CategoryNewsFinder  extends Finder {}
interface VideoLibraryFinder  extends Finder {}
interface VideoFinder  extends Finder {}

interface SalaryDailyFinder  extends Finder {}
interface PositionsFinder  extends Finder {}
interface NewsFinder  extends Finder {}
interface ConfigFinder  extends Finder {}
interface GuestFinder  extends Finder {}
interface PageFinder  extends Finder {}
interface ReportFinder  extends Finder {}
?>