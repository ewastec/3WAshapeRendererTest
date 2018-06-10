$('#triangle').on('click', drawTriangle);
function drawTriangle()
{
    //global var
    var svg = $('svg');
    var position = [];
    //var mouseEvent = 'mousedown';
    //click 3times
    var message = 'Click 3 times';
    $('.message').append(message);
    //get x,y x1,y1 x2,y2 on mousedown
    $('svg').click(function (e) 
    { 
        //Relative ( to its parent) mouse position 
        var posX = $(this).position().left;
        var posY = $(this).position().top;
        console.log(posX);
        //console.log(posY);
        var pageX = e.pageX;
        console.log(pageX);
        //alert((e.pageX - posX) + ' , ' + (e.pageY - posY));
        var newX = parseInt(e.pageX - posX);
        var newY = e.pageY - posY;
        console.log(newX);
        
        position.push({X: newX , Y: newY });
        
        if(position.length == 3)
        {
            console.log( position[0]['X']);
            console.log( position[0]['Y']);
            console.log( position[1]['X']);
            console.log( position[1]['Y']);
            console.log( position[2]['X']);
            console.log( position[2]['Y']);
            $.ajax({
                url: "index.php",
                //data: {position: position},
                data: 
                {   
                    position: 'sendPosition', 
                    X: position[0]['X'] , Y: position[0]['Y'],
                    X1: position[1]['X'] , Y1: position[1]['Y'],
                    X2: position[2]['X'] , Y2: position[2]['Y'],
                 },
                type: 'post',
                success: function(result)
                {
                    //var $svg=$('svg');
                  //  $svg.replaceWith($svg);
                    var xml = jQuery.parseXML(result);
                    $("svg").append(xml.documentElement);
                    //$('svg').append(result);
                    $("body").html($("body").html());
                    console.log(result);
                    $messageSuccess = 'this is your triangle';
                    $('.messsage').append($messageSuccess);
                }
            });
        }
        



    });

   /* if(objXY)
    {
        position.push(objXY);
        //console.log(position);
    }
    */
    
    
    
}