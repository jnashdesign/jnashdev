// Behance API Request
$(document).ready(function () {
	'use strict';
			var apiKey  = 'fzck3Bn6IrOojZklTQQoWnnFMma1kRyT';
			var userID  = 'jnashdesign';
			
			(function myPortfolio() {
				var perPage = 20,
			   		behanceUserAPI = 'http://www.behance.net/v2/users/'+ userID +'/projects?callback=?&api_key=' + apiKey + '&per_page=' + perPage;
				
				function setPortfolioCovers() {
					window.projectData = JSON.parse(sessionStorage.getItem('myBehanceUserInfo'));
					var getTemplate = $('#portfolio-template').html(),
						template    = Handlebars.compile(getTemplate),
						result      = template(window.projectData);
					$('#behance-portfolio').html(result);
				}

				if(sessionStorage.getItem('myBehanceUserInfo')) {
					setPortfolioCovers();
				} else {
					$.getJSON(behanceUserAPI, function(project) {
						var data = JSON.stringify(project);
						sessionStorage.setItem('myBehanceUserInfo', data);
						setPortfolioCovers();
					});
				}

				function setPortfolioImages() {
					window.projectImageData = JSON.parse(sessionStorage.getItem('myBehanceProjectInfo'));
					var getTemplate = $('#portfolio-images').html(),
						template    = Handlebars.compile(getTemplate),
						result      = template(window.projectImageData);
					$('.project-image-template').html(result);
				}
				
				if(sessionStorage.getItem('myBehanceProjectInfo')) {
					setPortfolioImages();
				} else {
					$.getJSON(behanceUserAPI, function(project) {
						var data = JSON.stringify(project);
						sessionStorage.setItem('myBehanceProjectInfo', data);
						setPortfolioImages();
					});
				}

				var projectObject =	window.projectData.projects;
				$.each(projectObject, function(index, value) {
					window.projectId			=	value.id;
					var behanceProjectInfo	=	'http://www.behance.net/v2/projects/' + window.projectId + '?&api_key=' + apiKey;
						$.getJSON(behanceProjectInfo, function(projectInfoData) {
							var projectImages = JSON.stringify(projectInfoData);
							sessionStorage.setItem('myBehanceUserInfo', projectImages);
							setPortfolioImages();
						});
					console.log(behanceProjectInfo);
			});
		})();

});