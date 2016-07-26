//Create GLOBAL variable below here on line 2
var global_result = null;

$(document).ready(function () {
    $('button').click(function () {
        console.log('click initiated');
        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function (result) {
                console.log('AJAX Success function called, with the following result:', result);
                global_result = result;
                console.log("movie 1 is " + result.feed.entry[0]);
                var movieOne = result.feed.entry[0];
                console.log(movieOne);
                var movieOneImage = movieOne['im:image'][2];
                console.log(movieOneImage);

                var movies = result.feed.entry;
                for (i = 0; i < movies.length; i++) {
                    // console.log(movies[i]);
                    // console.log(movies[i]['im:image'][2].label);

                    var div = $('<div>',{
                        class: 'topMovies'
                    });

                    var figure = $('<figure>');
                    var img = $('<img>',{
                        src:movies[i]['im:image'][2].label
                        });
                    figure.append(img);

                    var figCaption = $('<figCaption>');
                    var title = $('<h5>',{
                        text:  movies[i]['title'].label
                    });
                    figCaption.append(title);


                    div.append(figure, figCaption);
                    $('#main').append(div);
                }
            }
        });
        console.log('End of click function');
    });
});

