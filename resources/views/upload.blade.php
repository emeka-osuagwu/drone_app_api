<video width="320" height="240" controls>
  <source src="http://drone.dev/upload/videos/c4ca4238a0b923820dcc509a6f75849b1469713885file.mp4" type="video/mp4">
  <source src="http://drone.dev/upload/videos/c4ca4238a0b923820dcc509a6f75849b1469713885file.mp4" type="video/ogg">
  Your browser does not support the video tag.
</video>



<html>
   
<script src="{{ asset('ng/ng.js') }}"></script>
<script src="{{ asset('ng/ng-file-upload.js') }}"></script>
<script src="{{ asset('ng/ng-file-upload.min.js') }}"></script>
   
   <body ng-app = "myApp">
	
      <div ng-controller = "myCtrl">
         <input type = "file" file-model = "myFile"/>
         <button ng-click = "uploadFile()">upload me</button>
      </div>
      
      <script>
      
         var myApp = angular.module('myApp', []);
         
         myApp.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                  
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);
      
         myApp.service('fileUpload', ['$http', function ($http) {
            this.uploadFileToUrl = function(file, uploadUrl){
               var fd = new FormData();
               fd.append('file', file);
            
               $http.post(uploadUrl, fd, {
                  transformRequest: angular.identity,
                  headers: {'Content-Type': undefined}
               })
            
               .success(function(){
               })
            
               .error(function(){
               });
            }
         }]);
      
         myApp.controller('myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){
            $scope.uploadFile = function(){

               var video = $scope.myFile;
               
               console.log('file is ' );
               console.dir(video);
               
               var uploadUrl = "/api/v1/video/create";
               fileUpload.uploadFileToUrl(video, uploadUrl);
            };
         }]);
			
      </script>
      
   </body>
</html>