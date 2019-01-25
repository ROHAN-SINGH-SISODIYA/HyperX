<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<!-- bootstrap files-->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="js/mdb.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    <!--end bootstrap files-->

    <!--angular files-->
	<script src="js/angular.js"></script>
    <!--end angular file-->
    
    <!--controller and module files-->
    <script src="js/myApp.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/dirPaginate.js"></script>
    <!--end controller and module files-->
</head>
<body style="background-color:grey;">
<div class="container" ng-app="myapp" ng-controller="rohan" style="border: 2px solid black;padding: 10px;background-color:lightgrey;">	
<form method="post">
	<center><h4 style="color:grey"><u>Personal Infornation</u></h4></center>
   <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Fullname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" ng-model="fname"  placeholder="Fullname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" ng-model="email1" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" ng-model="pswd" placeholder="Password">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" ng-model="gender" value="male" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" ng-model="gender" value="female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button  ng-click="insert();" ng-if="addbtn" class="btn btn-primary">Add</button>
      <button ng-click="update();" ng-if="updatebtn" class="btn btn-success">Update</button>
     </div>
  </div>
  <h4>search name : <input type="text" ng-model="searchdata" placeholder="search...!" /></h4>
</form>


<div class="table-responsive" style="overflow-x: unset;">
    <table datatable="ng" dt-options="vm.dtOptions" class="table table-dark table-bordered table-striped">
     <thead>
      <tr>
        <th>Id</th>
       <th>Fullname</th>
       <th>Email</th>
       <th>Password</th>
       <th>Gender</th>
       <th>Edit</th>
       <th>Delete</th>
      </tr>
     </thead>
     <tbody>
      <tr ng-init="getInfo();"  dir-paginate="name01 in details|filter:searchdata|itemsPerPage:10">
       <td>{{name01.id}}</td>
       <td>{{name01.fullname |uppercase}}</td>
       <td>{{name01.email |uppercase}}</td>
       <td>{{name01.password |uppercase}}</td>
       <td>{{name01.gender |uppercase}}</td>
       <td>
         <button ng-click="edit(name01.id, name01.fullname, name01.email, name01.password,name01.gender);" class="btn btn-sm btn-info waves-effect waves-light">Edit</button>

       </td>
       <td>

         <button ng-click="delete1(name01.id);" class="btn btn-sm btn-danger waves-effect waves-light">Delete</button>
       </td>
      </tr>
     </tbody>
    </table>
    <div class="pull-right" style="margin-top:-30px;">
      <dir-pagination-controls
         max-size="5"
         direction-links="true"
         boundary-links="true" >
      </dir-pagination-controls>
      </div>
</div>

</div>
<script src="js/dirPaginate.js"></script>
<script src="js/angular.js"></script>
</body>
</html>