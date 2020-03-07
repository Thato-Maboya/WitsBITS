<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./index.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <!---navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Job Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
            Job Portal
        </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <!--end navbar-->


    <!--columns-->
    <div class="container">
        <div class="row">
            <div class="col-sm row1">
                <div id="leftSec">
                    <h5 class="h5_left">Sort by:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Date (ASC)</li>
                        <li class="list-group-item">Date (DESC)</li>
                    </ul>

                    <br/>
                    <br/>
                    <h5 class="h5_left">Job Type:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" onclick="filter('fulltime')">Full time</li>
                        <li class="list-group-item" onclick="filter('contract')">Contract</li>
                        <li class="list-group-item" onclick="filter('temp')">Temporary</li>
                        <li class="list-group-item" onclick="filter('parttime')">Part-time</li>
                        <li class="list-group-item" onclick="filter('perm')">Permanent</li>
                    </ul>
					
					 <h5 class="h5_left">Areas of Expertise:</h5>
					 <div class="areas_of_axpertise_filter">
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Data Capturer</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Researcher</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Clinician</label>
										</div> 
										
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Data Analyst</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Database manager</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Administrator</label>
										</div> 
										
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Undergrad Student</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Postgrad Student</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="" >Quality Assurance</label>
										</div> 
										<div class="checkbox"> 
										<label><input style="margin-right: 8px" type="checkbox" value="">Database Design</label>
										</div> 
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Clinical Trial</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px" type="checkbox" value="">Research Co-ordinator</label>
										</div>
										<div class="checkbox">
										  <label><input style="margin-right: 8px"type="checkbox" value="">Programmer/Developer</label>
										</div> 
									
						<h1 class="btn btn-primary">Apply Filters</h1>
				</div>
                </div>
            </div>
            <div class="col-sm-7 row2">
            
            <?php
                if(isset($_GET["fulltime"])){
                  echo "fulltime";
                }

                if(isset($_GET["parttime"])){
                  echo "part time";
                }
              ?> 

            </div>
            <div class="col-sm row3">
            <!-- One of three columns -->
            </div>
        </div>
    </div>
    <!--columns-->









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
  function filter(filt){
    console.log(filter);
  }
</script>

</body>
</html>
