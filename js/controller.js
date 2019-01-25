app1.controller('rohan',function($scope,$http)
{  
 	
   $scope.insert=function()
    {

       $http.post("process/db.php",{ name1:$scope.fname, em1:$scope.email1, ps1:$scope.pswd, gn1:$scope.gender}).success(function(data,status,headers,config)
         {
           alert("inserted");
           getInfo();
          }); 
       
        $scope.name1="";
        $scope.em1="";
        $scope.ps1="";
        $scope.gn1="";
        	
    }
    
    getInfo();
    $scope.updatebtn=false;
    $scope.addbtn=true;
    function getInfo()
    {
   
      $http.get('process/select.php').success(function(data)
      {
           $scope.details = data;
      });
    } 



     $scope.delete1 = function(item) 
        {
           
            $http.post("process/delete.php",{ id:item }).success(function(data, status, headers, config) 
            {
                getInfo(); 
                alert("deleted");
            });
        }

        

  $scope.edit = function(id, fname, email, password,gender) 
    {
        $scope.updatebtn = true;
        $scope.addbtn = false;


        $scope.id = id;
        $scope.fname = fname;
        $scope.email1 = email;
        $scope.pswd = password;
        $scope.gender=gender;
    }
    $scope.update = function()
     {

        $http.post("process/update.php", { id: $scope.id,name1:$scope.fname, em1:$scope.email1, ps1:$scope.pswd ,gn1:$scope.gender}).success(function(data, status, headers, config) 
        {

            getInfo(); 
            alert("updated");
        });

        $scope.id="";
        $scope.name1 = "";
        $scope.em1 = "";
        $scope.ps1 = "";
        $scope.gn1=""; 
        $scope.updatebtn = false;
        $scope.addbtn = true;
    }    
   

  

    
});