<!DOCTYPE html>
<html ng-app="priceListApp">
    <head>
    <meta charset="utf-8">
    <title>Marge | KaraokeSongBook</title>      
      <center><h3>Search:&emsp;<input ng-model="query" type="text"/></h3></center><br>
      <div><center><h4>Mega Vision: "The Original Version(Old)" <?php echo "| Note: Partial List"; ?></h4></center></div>
        <script src="lib/jquery-1.10.2.min.js"></script>
        <script src="lib/angular.min.js"></script>    
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-1.10.2.min.js">      
         <script>
        var priceListApp = angular.module('priceListApp', []);
        priceListApp.controller('priceListCtrl', ['$scope', '$http', function(scope, http) {
            http.get('priceLists.json').success(function (data) {
                scope.priceLists = data;
            });                      
        }]);
        </script>        
   </head>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

 <body style="background-color:powderblue;" ng-controller="priceListCtrl">
   <style>
        table, th, td {
            border: 1px solid black;
        }
   </style>
   
         <table class="table table-striped" style="width:100%">  
                  <tr>
                     <th><button ng-click="order = 'no'">Order by No.</button></th>
                     <th><button ng-click="order = 'song'">Order by Song</button></th>
                     <th><button ng-click="order = 'artist'">Order by Artist</button></th>                 
                     <th><button ng-click="order = 'description'">Order by Description</button></th>
                  </tr>                 
                  <tr ng-repeat="priceList in priceLists | filter:query | orderBy: order ">
                     <th>{{ priceList.no }}</th> 
                     <th>{{ priceList.song  }}</th>    
                     <th>{{ priceList.artist }}</th>                   
                     <th>{{ priceList.description }}</th> 
                  </tr>
            </table> 
       
</body>
</html>



