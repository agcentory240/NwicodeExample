/*global
 App, angular, BASE_PATH
 */
angular.module("starter").controller("NwicodeExampleViewController", function ($log, $sce, $scope, $stateParams, $timeout, NwicodeExample,Loader,Customer) {
    angular.extend($scope, {
        is_loading  : true,
        value_id    : $stateParams.value_id
    });
    
	console.log("NwicodeExampleViewController fired");
	
	$scope.value_id = $stateParams.value_id;
	NwicodeExample.value_id= $stateParams.value_id;
	$scope.page_title = "";
	$scope.page_message = "";
	$scope.is_loading = true;
	Loader.show();

    
	$scope.loadContent = function () {
		console.log("NwicodeExample loadContent.");
		NwicodeExample.find().then(function (data) {
			console.log("NwicodeExample.find:");
			console.log(data);
			$scope.page_title = data.example.title;
			$scope.page_message = data.example.message;
			$scope.is_loading = false;

			Loader.hide();			
	

			
		}).then(function () {
			//$scope.is_loading = false;
			//Loader.hide();
		});
			
    };
    
	$scope.loadContent();
	

});