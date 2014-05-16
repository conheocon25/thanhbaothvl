<?php

//... Note the call to the class is at the foot of the file

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// some styles fo the test output
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>
<style  type="text/css"><!--
td{
	font-face:sans-serif;
	font-size:11px;
}
th{
	font-face:sans-serif;
	font-size:11px;
	text-align:left;
}
.title{
	font-face:sans-serif;
	font-size:11px;
	background-color:#3D4651;
	border-top:1px #3D4651 solid;
	border-bottom:1px #000000 solid;
/*	background-image:url("../img/cellGrad.jpg"); */ 
	color:#A7EDFB;
	font-weight:bold;	
}

.input{
	font-family:sans-serif;
	font-size:11px;
	text-decoration:none;
	border:1px #3D4651 solid;
	background-color:#EFF0FF;
	color:#000000;
}

.submit{
	font-family:sans-serif;
	font-size:11px;
	text-decoration:none;
	border:1px #000000 outset;
	background-color:#3D4651;
	color:#ffffff;
	
}
--></style>
<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// this array is source data only, the call to the clas is at 
// the bottom of the page
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



$newsSources['BBC']['world']="http://news.bbc.co.uk/rss/newsonline_uk_edition/world/rss091.xml";
$newsSources['BBC']['uk']="http://news.bbc.co.uk/rss/newsonline_uk_edition/uk/rss091.xml";
$newsSources['BBC']['england']="http://news.bbc.co.uk/rss/newsonline_uk_edition/england/rss091.xml";
$newsSources['BBC']['norther ireland']="http://news.bbc.co.uk/rss/newsonline_uk_edition/northern_ireland/rss091.xml";
$newsSources['BBC']['scotland']="http://news.bbc.co.uk/rss/newsonline_uk_edition/scotland/rss091.xml";
$newsSources['BBC']['wales']="http://news.bbc.co.uk/rss/newsonline_uk_edition/wales/rss091.xml";
$newsSources['BBC']['business']="http://news.bbc.co.uk/rss/newsonline_uk_edition/business/rss091.xml";
$newsSources['BBC']['uk politics']="http://news.bbc.co.uk/rss/newsonline_uk_edition/uk_politics/rss091.xml";
$newsSources['BBC']['health']="http://news.bbc.co.uk/rss/newsonline_uk_edition/health/rss091.xml";
$newsSources['BBC']['education']="http://news.bbc.co.uk/rss/newsonline_uk_edition/education/rss091.xml";
$newsSources['BBC']['science technology']="http://news.bbc.co.uk/rss/newsonline_uk_edition/sci/tech/rss091.xml";
$newsSources['BBC']['technology']="http://news.bbc.co.uk/rss/newsonline_uk_edition/technology/rss091.xml";
$newsSources['BBC']['entertainment']="http://news.bbc.co.uk/rss/newsonline_uk_edition/entertainment/rss091.xml";
$newsSources['BBC']['talking point']="http://news.bbc.co.uk/rss/newsonline_uk_edition/talking_point/rss091.xml";
$newsSources['BBC']['magazine']="http://news.bbc.co.uk/rss/newsonline_uk_edition/magazine/rss091.xml";
$newsSources['BBC']['week at a glance']="http://news.bbc.co.uk/rss/newsonline_uk_edition/week_at-a-glance/rss091.xml";
$newsSources['BBC']['programmes']="http://news.bbc.co.uk/rss/newsonline_uk_edition/programmes/rss091.xml";

// wired.com

$newsSources['Wired']['technology stories']="http://www.wired.com/news/feeds/rss2/0,2610,3,00.xml";
$newsSources['Wired']['business news']="http://www.wired.com/news/feeds/rss2/0,2610,1,00.xml";
$newsSources['Wired']['wireless news']="http://www.wired.com/news/feeds/rss2/0,2610,31,00.xml";
$newsSources['Wired']['e business']="http://www.wired.com/news/feeds/rss2/0,2610,10,00.xml";
$newsSources['Wired']['medical technology news']="http://www.wired.com/news/feeds/rss2/0,2610,12,00.xml";
$newsSources['Wired']['gadgets and gizmos']="http://www.wired.com/news/feeds/rss2/0,2610,40,00.xml";

// yahoo

$newsSources['Yahoo']['Top Stories']="http://rss.news.yahoo.com/rss/topstories";
$newsSources['Yahoo']['US']=" http://rss.news.yahoo.com/rss/us";
$newsSources['Yahoo']['World']=" http://rss.news.yahoo.com/rss/world";
$newsSources['Yahoo']['Business']=" http://rss.news.yahoo.com/rss/business";
$newsSources['Yahoo']['Technology']=" http://rss.news.yahoo.com/rss/tech";
$newsSources['Yahoo']['Politics']=" http://rss.news.yahoo.com/rss/politics";
$newsSources['Yahoo']['Elections']=" http://rss.news.yahoo.com/rss/elections";
$newsSources['Yahoo']['Sports']="http://rss.news.yahoo.com/rss/sports";
$newsSources['Yahoo']['Entertainment']=" http://rss.news.yahoo.com/rss/entertainment";
$newsSources['Yahoo']['Health']=" http://rss.news.yahoo.com/rss/health";
$newsSources['Yahoo']['Oddly Enough']="http://rss.news.yahoo.com/rss/oddlyenough";
$newsSources['Yahoo']['Science']=" http://rss.news.yahoo.com/rss/science";
$newsSources['Yahoo']['Opinion/Editorial']=" http://rss.news.yahoo.com/rss/oped";
$newsSources['Yahoo']['Most Emailed']="http://rss.news.yahoo.com/rss/mostemailed";
$newsSources['Yahoo']['Highest Rated']=" http://rss.news.yahoo.com/rss/highestrated";
$newsSources['Yahoo']['Most Viewed']=" http://rss.news.yahoo.com/rss/mostviewed";


	
$newsSources['Reuters']['Top News']="http://today.reuters.co.uk/news/newsChannel.aspx?type=topNews";
$newsSources['Reuters']['World']="http://today.reuters.co.uk/news/newsChannel.aspx?type=worldNews";
$newsSources['Reuters']['Business']="http://today.reuters.co.uk/news/newsChannel.aspx?type=businessNews";
$newsSources['Reuters']['Editors Choice']="http://today.reuters.co.uk/news/newsChannel.aspx?type=reutersEdge";
$newsSources['Reuters']['Science/Technology']="http://today.reuters.co.uk/news/newsSciTech.aspx";
$newsSources['Reuters']['Health']="http://today.reuters.co.uk/news/newsChannel.aspx?type=healthNews";
$newsSources['Reuters']['World Crises']="http://investing.reuters.co.uk/News/HumanitarianCrises.aspx";
$newsSources['Reuters']['Sports']="http://today.reuters.co.uk/news/newsChannel.aspx?type=sportsNews";
$newsSources['Reuters']['Entertainment']="http://today.reuters.co.uk/news/newsChannel.aspx?type=entertainmentNews";
$newsSources['Reuters']['Oddly Enough']="http://today.reuters.co.uk/news/newsChannel.aspx?type=oddlyEnoughNews";
$newsSources['Reuters']['Motoring']="http://www.reuters.co.uk/newsMotoring.jhtml";
$newsSources['Reuters']['Video']="http://tv.reuters.co.uk/?fr_chl=32eeae4ef7c9e3026a99f6b5d8796b0b50ea0b9b";
$newsSources['Reuters']['Pictures']="http://pictures.reuters.co.uk/pictures/default.aspx";

$newsSources['CNN']["Top Stories"]="http://rss.cnn.com/rss/cnn_topstories.rss";
$newsSources['CNN']["World"]="http://rss.cnn.com/rss/cnn_world.rss";
$newsSources['CNN']["U.S."]="http://rss.cnn.com/rss/cnn_us.rss";
$newsSources['CNN']["Politics"]="http://rss.cnn.com/rss/cnn_allpolitics.rss";
$newsSources['CNN']["Law"]="http://rss.cnn.com/rss/cnn_law.rss";
$newsSources['CNN']["Technology"]="http://rss.cnn.com/rss/cnn_tech.rss";
$newsSources['CNN']["Science & Space"]="http://rss.cnn.com/rss/cnn_space.rss";
$newsSources['CNN']["Health"]="http://rss.cnn.com/rss/cnn_health.rss";
$newsSources['CNN']["Entertainment"]="http://rss.cnn.com/rss/cnn_showbiz.rss";
$newsSources['CNN']["Travel"]="http://rss.cnn.com/rss/cnn_travel.rss";
$newsSources['CNN']["Education"]="http://rss.cnn.com/rss/cnn_education.rss";
$newsSources['CNN']["Offbeat"]="http://rss.cnn.com/rss/cnn_offbeat.rss";
$newsSources['CNN']["Most Popular"]="http://rss.cnn.com/rss/cnn_mostpopular.rss";

$newsSources['ABC']['Top Stories']="http://my.abcnews.go.com/rsspublic/fp_rss20.xml"; 
$newsSources['ABC']['World Headlines']="http://my.abcnews.go.com/rsspublic/world_rss20.xml"; 
$newsSources['ABC']['US Headlines']="http://my.abcnews.go.com/rsspublic/us_rss20.xml"; 
$newsSources['ABC']['Politics Headlines']="http://my.abcnews.go.com/rsspublic/politics_rss20.xml"; 
$newsSources['ABC']['Business Headlines']="http://my.abcnews.go.com/rsspublic/business_rss20.xml"; 
$newsSources['ABC']['Technology Headlines']="http://my.abcnews.go.com/rsspublic/scitech_rss20.xml";
$newsSources['ABC']['Health Headlines']="http://my.abcnews.go.com/rsspublic/health_rss20.xml"; 
$newsSources['ABC']['Entertainment Headlines']="http://my.abcnews.go.com/rsspublic/entertainment_rss20.xml";
$newsSources['ABC']['Travel Headlines']="http://my.abcnews.go.com/rsspublic/travel_rss20.xml"; 
$newsSources['ABC']['ESPN Sport']="http://my.abcnews.go.com/rsspublic/sports_rss20.xml"; 
$newsSources['ABC']['World News Tonight Headlines']="http://my.abcnews.go.com/rsspublic/wnt_rss20.xml"; 
$newsSources['ABC']['20/20 Headlines']="http://my.abcnews.go.com/rsspublic/2020_rss20.xml"; 
$newsSources['ABC']['Primetime Live Headlines']="http://my.abcnews.go.com/rsspublic/primetime_rss20.xml"; 
$newsSources['ABC']['Nightline Headlines']="http://my.abcnews.go.com/rsspublic/nightline_rss20.xml"; 
$newsSources['ABC']['Good Morning America Headlines']="http://my.abcnews.go.com/rsspublic/gma_rss20.xml"; 
$newsSources['ABC']['This Week Headlines']="http://my.abcnews.go.com/rsspublic/tw_rss20.xml";


$newsSources['CBS']['Top Stories']="http://www.cbsnews.com/feeds/rss/main.rss"; 
$newsSources['CBS']['US']="http://www.cbsnews.com/feeds/rss/national.rss";
	$newsSources['CBS']['World']="http://www.cbsnews.com/feeds/rss/world.rss";
	$newsSources['CBS']['Politics']="http://www.cbsnews.com/feeds/rss/politics.rss";
	$newsSources['CBS']['Sci-Tech']="http://www.cbsnews.com/feeds/rss/scitech.rss";
	$newsSources['CBS']['HealthWatch']="http://www.cbsnews.com/feeds/rss/health.rss";
	$newsSources['CBS']['Entertainment']="http://www.cbsnews.com/feeds/rss/entertainment.rss";
	$newsSources['CBS']['Business']="http://www.cbsnews.com/feeds/rss/business.rss";
	$newsSources['CBS']['Opinion']="http://www.cbsnews.com/feeds/rss/opinion.rss";
	$newsSources['CBS']['CBS News Video']="http://www.cbsnews.com/feeds/rss/video.rss";
$newsSources['CBS']['The Early Show']="http://www.cbsnews.com/feeds/rss/earlyshow.rss";
$newsSources['CBS']['CBS Evening News']="http://www.cbsnews.com/feeds/rss/eveningnews.rss"; 
$newsSources['CBS']['48 Hours']="http://www.cbsnews.com/feeds/rss/48hours.rss";
$newsSources['CBS']['60 Minutes (SUN)']="http://www.cbsnews.com/feeds/rss/60minutes.rss";
$newsSources['CBS']['60 Minutes (WED)']="http://www.cbsnews.com/feeds/rss/60II.rss";

$newsSources['All News']['Top Stories']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=top";
$newsSources['All News']['Business']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=business";
$newsSources['All News']['Entertainment']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=entertainment"; 
$newsSources['All News']['Health']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=health";
$newsSources['All News']['Offbeat']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=offbeat";
$newsSources['All News']['Politics']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=politics";
$newsSources['All News']['Sports']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=sports";
$newsSources['All News']['Technology']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=technology";
$newsSources['All News']['World']="http://www.allheadlinenews.com/cgi-bin/news/xml/newsxml.cgi?cat=world";

$newsSources['Scotsman']['Headlines']="http://thescotsman.scotsman.com/index.cfm?format=rss";
$newsSources['Scotsman']['Scotland']="http://thescotsman.scotsman.com/scotland.cfm?format=rss";
$newsSources['Scotsman']['Aberdeen']="http://thescotsman.scotsman.com/aberdeen.cfm?format=rss";
$newsSources['Scotsman']['Dundee']="http://thescotsman.scotsman.com/dundee.cfm?format=rss";
$newsSources['Scotsman']['Edinburgh']="http://thescotsman.scotsman.com/edinburgh.cfm?format=rss";
$newsSources['Scotsman']['Glasgow']="http://thescotsman.scotsman.com/glasgow.cfm?format=rss";
$newsSources['Scotsman']['Inverness']="http://thescotsman.scotsman.com/inverness.cfm?format=rss";
$newsSources['Scotsman']['UK']="http://thescotsman.scotsman.com/uk.cfm?format=rss";
$newsSources['Scotsman']['International']="http://thescotsman.scotsman.com/international.cfm?format=rss";
$newsSources['Scotsman']['Sport']="http://thescotsman.scotsman.com/sport.cfm?format=rss";
$newsSources['Scotsman']['Football']="http://thescotsman.scotsman.com/football.cfm?format=rss";
$newsSources['Scotsman']['Rugby']="http://thescotsman.scotsman.com/rugby.cfm?format=rss";
$newsSources['Scotsman']['Racing']="http://thescotsman.scotsman.com/racing.cfm?format=rss";
$newsSources['Scotsman']['Other Sport']="http://thescotsman.scotsman.com/othersport.cfm?format=rss";
$newsSources['Scotsman']['Business']="http://thescotsman.scotsman.com/business.cfm?format=rss";
$newsSources['Scotsman']['Politics']="http://thescotsman.scotsman.com/politics.cfm?format=rss";
$newsSources['Scotsman']['Sci-Tech']="http://thescotsman.scotsman.com/scitech.cfm?format=rss";
$newsSources['Scotsman']['Health']="http://thescotsman.scotsman.com/health.cfm?format=rss";
$newsSources['Scotsman']['Education']="http://thescotsman.scotsman.com/education.cfm?format=rss";
$newsSources['Scotsman']['Entertainment']="http://thescotsman.scotsman.com/entertainment.cfm?format=rss";
$newsSources['Scotsman']['Gaelic']="http://thescotsman.scotsman.com/gaelic.cfm?format=rss";
$newsSources['Scotsman']['Opinion']="http://thescotsman.scotsman.com/opinion.cfm?format=rss";
$newsSources['Scotsman']['Leaders']="http://thescotsman.scotsman.com/leaders.cfm?format=rss";
$newsSources['Scotsman']['Comment']="http://thescotsman.scotsman.com/comment.cfm?format=rss";
$newsSources['Scotsman']['Letters']="http://thescotsman.scotsman.com/letters.cfm?format=rss";
$newsSources['Scotsman']['Obituaries']="http://thescotsman.scotsman.com/obituaries.cfm?format=rss";
$newsSources['Scotsman']['Games']="http://thescotsman.scotsman.com/games.cfm?format=rss";
$newsSources['Scotsman']['S2']="http://thescotsman.scotsman.com/s2.cfm?format=rss";
$newsSources['Scotsman']['Scotsman Magazine']="http://thescotsman.scotsman.com/magazine.cfm?format=rss";
$newsSources['Scotsman']['Critique']="http://thescotsman.scotsman.com/critique.cfm?format=rss";

$newsSources['NPG']["Nature"]="http://www.nature.com/nature/current_issue/rss";
$newsSources['NPG']["Nature AOP"] ="http://www.nature.com/nature/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Nature Japanese Highlights"]="http://www.natureasia.com/japan/rss.rdf";
$newsSources['NPG']["Nature Biotechnology"]="http://www.nature.com/nbt/current_issue/rss";
$newsSources['NPG']["Nature Cell Biology"]="http://www.nature.com/ncb/current_issue/rss";
$newsSources['NPG']["Nature Genetics"]="http://www.nature.com/ng/current_issue/rss";
$newsSources['NPG']["Nature Immunology"]="http://www.nature.com/ni/current_issue/rss";
$newsSources['NPG']["Nature Medicine"] ="http://www.nature.com/nm/current_issue/rss";
$newsSources['NPG']["Nature Methods"]="http://www.nature.com/nmeth/current_issue/rss";
$newsSources['NPG']["Nature Neuroscience"] ="http://www.nature.com/neuro/current_issue/rss";
$newsSources['NPG']["Nature Structural And Molecular Biology"] ="http://www.nature.com/nsmb/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Cancer"] ="http://www.nature.com/nrc/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Drug Discovery"]  ="http://www.nature.com/nrd/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Genetics"]  ="http://www.nature.com/nrg/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Immunology"]  ="http://www.nature.com/nri/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Microbiology"]  ="http://www.nature.com/nrmicro/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Molecular Cell Biology"]  ="http://www.nature.com/nrm/current_issue/rss";
$newsSources['NPG']["Nature Reviews: Neuroscience"]  ="http://www.nature.com/nrn/current_issue/rss";
$newsSources['NPG']["Bone Marrow Transplantation AOP"]  ="http://www.nature.com/bmt/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["British Dental Journal"]  ="http://www.nature.com/bdj/rss.rdf";
$newsSources['NPG']["British Journal of Cancer AOP"]  ="http://www.nature.com/bjc/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["British Journal of Pharmacology AOP"]  ="http://www.nature.com/bjp/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Cancer Gene Therapy AOP"]  ="http://www.nature.com/cgt/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Cell Death and Differentiation AOP"]  ="http://www.nature.com/cdd/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["The EMBO Journal AOP"]  ="http://www.nature.com/emboj/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["EMBO Reports AOP"]  ="http://www.nature.com/embor/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["European Journal of Clinical Nutrition AOP"]  ="http://www.nature.com/ejcn/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["European Journal of Human Genetics AOP"]  ="http://www.nature.com/ejhg/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Eye AOP"]  ="http://www.nature.com/eye/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Gene Therapy AOP"]  ="http://www.nature.com/gt/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Genes and Immunity AOP"]  ="http://www.nature.com/gene/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Heredity AOP"]  ="http://www.nature.com/hdy/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["International Journal of Impotence Research AOP"]  ="http://www.nature.com/ijir/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["International Journal of Obesity AOP"]  ="http://www.nature.com/ijo/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Journal of Cerebral Blood Flow and Metabolism AOP"]  ="http://www.nature.com/jcbfm/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Journal of Exposure Analysis and Environmental Epidemiology AOP"]  ="http://www.nature.com/jea/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Journal of Human Hypertension AOP"]  ="http://www.nature.com/jhh/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Journal of Perinatology AOP"]  ="http://www.nature.com/jp/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Leukemia AOP"]  ="http://www.nature.com/leu/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Laboratory Investigation AOP"]  ="http://www.nature.com/labinvest/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Modern Pathology AOP"]  ="http://www.nature.com/modpathol/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Molecular Psychiatry AOP"]  ="http://www.nature.com/mp/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Molecular Systems Biology"]  ="http://www.nature.com/msb/journal/v1/n1/rss.rdf";
$newsSources['NPG']["Neuropsychopharmacology AOP"]  ="http://www.nature.com/npp/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Oncogene AOP"]  ="http://www.nature.com/onc/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["The Pharmacogenomics Journal AOP"]  ="http://www.nature.com/tpj/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Prostate Cancer and Prostatic Diseases AOP"]  ="http://www.nature.com/pcan/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Spinal Cord AOP"]  ="http://www.nature.com/sc/journal/vaop/ncurrent/rss.rdf";
$newsSources['NPG']["Naturejobs: Biological Sciences"]  ="http://www.nature.com/naturejobs/jobs/biologicalsciences.rdf";
$newsSources['NPG']["Naturejobs: Editorial"]  ="http://www.nature.com/naturejobs/rss.rdf";
$newsSources['NPG']["Naturejobs: General"]  ="http://www.nature.com/naturejobs/jobs/general.rdf";
$newsSources['NPG']["Naturejobs: Physical Sciences"]  ="http://www.nature.com/naturejobs/jobs/physicalsciences.rdf";
$newsSources['NPG']["News@Nature.com"] ="http://www.nature.com/news/rss.rdf";
$newsSources['NPG']["Nature Materials Update"]  ="http://www.nature.com/materials/rss.rdf";
$newsSources['NPG']["Nature Signaling Update"]  ="http://www.signaling-gateway.org/update/rss.rdf"; 
$newsSources['NPG']["Access Debate"] ="http://www.nature.com/nature/focus/accessdebate/rss.rdf";



#echo "<table class=\"bord\" cellspacing=\"1\" cellpadding=\"0\">\n";
	echo " <table cellpadding=1 cellspacing=1 style=\"border:1px #000000 solid;\">";
	echo "<tr><td class=\"title\" colspan=\"5\">\n";
		echo "&nbsp;&nbsp;RSS / XML Web News Feeds\n";
	echo "</td></tr>\n";
	echo "<tr><td colspan=5 style=\"background-color:#CCCCCC; padding:5px;\">\n";
	echo "Please select a URL form the list below. Once you have clicked Fetch News you will see a list of News/Info Items form that site"; 
	echo "</td></tr>\n";
	
echo "<tr>\n";
echo "<td class=\"title\">BBC News</td>\n";
echo "<td class=\"title\">Wired News</td>\n";
echo "<td class=\"title\">Yahoo News</td>\n";
echo "<td class=\"title\"></td>\n";
echo "<td class=\"title\">CNN</td>\n";
echo "</tr>\n";
echo "<tr>\n";
$counter = 1;
foreach($newsSources as $name=>$array){

	if($counter==6){
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td class=\"title\">ABC</td>\n";
		echo "<td class=\"title\">CBS</td>\n";
		echo "<td class=\"title\">All News</td>\n";
		echo "<td class=\"title\">ScotsMan</td>\n";
		echo "<td class=\"title\">NPG</td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
	}

	echo "<td class=\"noticeBoard\" style=\"text-align:center;\">\n";
	if($name!="Reuters"){ // reuters not valid links, si I am just ignoring thme for this demo
		echo "<form method=post action=".$_SERVER['PHP_SELF'].">\n";
		echo "<select name=\"source\" class=\"input\" style=\"border:none;width:120px;\">\n";
		foreach($array as $key=>$val){
			$sel = ($val == $source)? " SELECTED " : "";
			echo "<option $sel value=$val>$key\n";
		}
		echo "</select><br>\n";
		echo "<input type=\"submit\" name=\"go\" value=\"Fetch News\" class=\"submit\" id=\"".$name."\" ";
		echo "title=\"Clear Form Details\" ";
		echo ">\n";
	
		echo "</form>\n";
	}else{
		echo "Blank Space";
	}
	echo "</td>\n";
	$counter++;
}
echo "</tr></table>\n";

//++++++++++++++++
// script usage  |
//++++++++++++++++


if($_REQUEST['go']!=""){
	include_once "newsReader.php";
	$feed = new newsReader;
	//echo $feed->readNewsFeed($_REQUEST['source']);
	echo $feed->readNewsFeed("http://giacngo.vn/thongtin/rss/?ID=1");
}
?>