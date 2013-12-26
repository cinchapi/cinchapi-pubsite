
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

	<title>Concourse</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	<style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    .carousel {
	margin-bottom: 0px;
	background: #31363a;
    }

    .carousel .container {
	margin-left: -2em;
	position: relative;
	z-index: 9;
    }

    .carousel .item {
      height: 700px;
    }


    .one {
      background: url(img/slide1.jpg) no-repeat;
      background-size: cover;
    }


    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 900px;
      margin-top: 35%;
    }
    </style>

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
    </head>

    <body>

	<!-- Wrap all page content here -->
	<div id="wrap">

	    <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-road"></span> Concourse</a>
		    </div>
		    <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			    <li><a href="#about">Features</a></li>
			    <li><a href="https://cinchapi.atlassian.net/wiki/display/CON/Getting+Started">Getting Started</a></li>
			    <li><a href="https://cinchapi.atlassian.net/wiki/display/CON/Concourse">Documentation</a></li>
			    <li><a href="https://cinchapi.atlassian.net/browse/CON/">Report Issues</a></li>
			    <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Download <b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li class="dropdown-header">Version 0.2 (RC1)</li>
				    <li><a href="download-api">concourse</a></li>
				    <li><a href="download">concourse-server</a></li>
				    <li class="divider"></li>
				    <li class="dropdown-header">Snapshots</li>
				    <li><a href="http://build.cinchapi.org/job/concourse%20(develop)/lastSuccessfulBuild/artifact/concourse/build/libs/">concourse</a></li>
				    <li><a href="http://build.cinchapi.org/job/concourse%20(develop)/lastSuccessfulBuild/artifact/concourse-server/build/distributions/">concourse-server</a></li>
				</ul>
			    </li>
			</ul>
		    </div><!--/.nav-collapse -->
		</div>
	    </div>
	    
	    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item one active">
          <div class="container">
            <div class="carousel-caption jumbotron">
              <h1 style="">Introducing <span class="text-primary">Concourse</span></h1>
	      <p style="color: #d7d7d7">meet data</p>
	      <a href="download" class="btn btn-primary btn-lg">Download</a>
            </div>
          </div>
        </div>
   
      </div>
    </div><!-- /.carousel -->

	    <!-- Begin page content -->
	    
	    <div class="container" id="about">
		<h2 style="margin-bottom: 1em;">Features</h2>
		<p class="lead">Concourse is a schemaless and distributed version control database with optimistic availability, serializable transactions and full text search. Concourse provides a more intuitive approach to data management that is easy to deploy, access and scale with minimal tuning while also maintaining the referential integrity and ACID characteristics of traditional database systems.</p>
		<blockquote><p class="text-muted">Concourse is a database written for programmers&mdash;it works right out the box, no assembly required&mdash;so developers can focus on business logic without sacrificing stability or performance.</p></blockquote>
		
		<div class="list-group">
		    <a href="#null" class="list-group-item">
			<h4 class="list-group-item-heading">Simple Data Model</h4>
			<p class="list-group-item-text">The Concourse data model is lightweight and flexible&mdash;it supports <em>any</em> kind of data at very large scales. Data about each person, place or thing is held in a <code>record</code>, which is simply a collection of <code>key/value</code> pairs that are together identified by a unique <code>primary key</code>. A key can map to multiple distinct values, even if those values have different types. And speaking of types, all data within Concourse is dynamically typed&mdash;so yes, it really is simple.
			</p>
		    </a>
		    <a href="#null" class="list-group-item active">
			<h4 class="list-group-item-heading">Schemaless Design</h4>
			<p class="list-group-item-text">Since Concourse makes very few assumptions about data, it integrates with your application seamlessly and never needs a translator (<em>goodbye object-relational impedance mismatch</em>)! You never have to declare any structure up front&mdash;no schema, no tables, no indexes...<em>nothing</em>. Concourse dynamically adapts to your application so that you can focus on building value in new places without having to drag the database along.</p>
		    </a>
		    <a href="#null" class="list-group-item">
			<h4 class="list-group-item-heading"><span class="label label-warning" style="margin-right: 1em;"> Coming Soon</span>Scalability and Fault Tolerance</h4>
			<p class="list-group-item-text">Concourse can be distributed across many different servers on commodity hardware to increase read and write throughput. Distributed data is automatically partitioned and replicated to ensure that the system can withstand arbitrary failure&mdash;all while maintaining ACID strong consistency and optimistic availability. So no need to guess when your data will <em>eventually</em> be accurate&mdash;when distributed Concourse responds to a query, you can trust the results <em>immediately</em>.
			</p>
		    </a>
		    <a href="#null" class="list-group-item active">
			<h4 class="list-group-item-heading">ACID Transactions</h4>
			<p class="list-group-item-text">Concourse supports cross-record transactions that are fully ACID compliant: all operations succeed or fail together; writes are visible to all readers only after being successfully committed; serializable isolation is used to prevent dirty reads, non-repeatable reads and phantom reads; and committed transactions are immediately stored to disk so they persist in the event of power loss, crash or error.
			</p>
		    </a>
		    <a href="#null" class="list-group-item">
			<h4 class="list-group-item-heading">Automatic Secondary Indexing</h4>
			<p class="list-group-item-text">You no longer need to decide what is interesting about your data before you even store it. Concourse automatically indexes everything in both logical and sorted order&mdash;using a buffered storage system to ensure that writes are fast&mdash;so you can quickly fetch and query <em>any</em> key at <em>any</em> time. Concourse fully supports ad-hoc range and predicate queries and automatically caches frequently requested data for optimal performance.</p>
		    </a>
		    <a href="#null" class="list-group-item active">
			<h4 class="list-group-item-heading">Version Control</h4>
			<p class="list-group-item-text">Concourse automatically and efficiently tracks revisions to your data. Of course this means that you can easily audit changes and revert to previous states without downtime; but it also means that you have the power to <strong>query and fetch data from any point in the past</strong>. Version control in Concourse makes it possible to build applications that know <em>what was known when</em> and can analyze real-time changes over time.
			</p>
		    </a>
		    <a href="#null" class="list-group-item">
			<h4 class="list-group-item-heading">Full Text Search</h4>
			<p class="list-group-item-text">Unstructured searches are as essential to an application's liveliness as structures queries. That's why Concourse automatically indexes text data&mdash;without diminishing write performance&mdash;so you can perform substring searches in real time as soon as data is stored. Indexes are updated on the fly, so searches are always accurate as soon as you make modifications or add new data.</p>
		    </a>
		    <a href="#null" class="list-group-item active">
			<h4 class="list-group-item-heading"><span class="label label-warning" style="margin-right: 1em;">Coming Soon</span> Relationships and Graph Queries</h4>
			<p class="list-group-item-text">The people, places and things in your data are all connected. So Concourse allows you to model those relationships with enforced referential integrity and also provides a built-in interface to perform analytical graph queries.</p>
		    </a>
		</div>
            </div>
	<div id="footer">
	    <div class="container">
		<p class="text-muted credit">Copyright &copy; 2013 Cinchapi Software Collective. Fork Concourse on <a href="https://github.com/cinchapi/concourse/fork">Github</a>.</p>
	    </div>
	</div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    </body>
</html>
