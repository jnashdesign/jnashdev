// Behance API Request
$(document).ready(function () {
	'use strict';
			var apiKey  = 'fzck3Bn6IrOojZklTQQoWnnFMma1kRyT';
			var userID  = 'jnashdesign';
			
			(function myPortfolio() {
				var perPage = 20,
			   		behanceUserAPI = 'http://www.behance.net/v2/users/'+ userID +'/projects?callback=?&api_key=' + apiKey + '&per_page=' + perPage;
				
				function setPortfolioTemplate() {
					window.projectData = JSON.parse(sessionStorage.getItem('myBehanceUserInfo'));
					var getTemplate = $('#portfolio-template').html(),
						template    = Handlebars.compile(getTemplate),
						result      = template(window.projectData);
					$('#behance-portfolio').html(result);
				}
			 
				if(sessionStorage.getItem('myBehanceUserInfo')) {
					setPortfolioTemplate();
				} else {
					$.getJSON(behanceUserAPI, function(project) {
						var data = JSON.stringify(project);
						sessionStorage.setItem('myBehanceUserInfo', data);
						setPortfolioTemplate();
					});
				}
		})();
});