"use strict";

(function(){

	angular
		.module("AcadTopbar")
		.directive("acadTopbar", Directive);

	function Directive(){
		return {
			restrict: "E",
			templateUrl: "./assets/templates/components/topbar/topbar.template.html",
			scope: {}
		};
	}

})();