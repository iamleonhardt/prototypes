var app = angular.module("myApp", []);

app.controller("itunesController", function($log, $http){

    var self = this;
    self.musicArray = [];
    // this.makeUrl = function(input){
    //     var url = 'https://itunes.apple.com/search?term=' + input + '&callback=JSON_CALLBACK';
    // }

    this.itunesCall = function(input){
        var url = 'https://itunes.apple.com/search?term=' + input + '&callback=JSON_CALLBACK';
        $http({
            url: url,
            method: 'jsonp'
        })
        .then(function(response){
            $log.log(response);
            self.musicArray = response.data.results;
            $log.log('var musicArray = ', self.musicArray);
        },
        function(response){
            $log.error(response);
        });
    };
});