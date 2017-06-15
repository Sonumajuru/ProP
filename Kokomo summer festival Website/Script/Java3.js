var tweetButton = document.getElementById('Twitter');
var tweet = document.getElementById('Ktweet');
var posttweet = document.getElementById('postTweet');
var show = true;
function ShowTweet() {
    if(show==true)
    {
        tweet.removeAttribute('hidden');
        //show= false;
//        tweetButton = document.getElementById('Twitter');
//        tweetButton.setAttribute('id','TwitterB');
    }
    else
    {
       // tweet.setAttribute('hidden','hidden');
       // show=true;
//         tweetButton = document.getElementById('TwitterB');
//         tweetButton.setAttribute('id','Twitter');
    }
    
}
tweetButton.addEventListener('click', ShowTweet, false);



/*var logingin = document.getElementById('LoginB');

function loginpage(e) {
    e.preventDefault();
    window.location.href = 'Login.html';
}
logingin.addEventListener('click', function(e){loginpage(e)}, false);*/


var show2 = true;
function moving(){
    if(show2 == true)
   {
       var posstpb = 82.755;
    var posb = 98.397;
    var posstp = 84.397;
    var pos = 100.397;
          var posttweetposb = 85;
    var posttweetpos = 101;
    var idnr = setInterval(frame,14);
    function frame(){
        if(pos == posstp || posb==posstpb ){
            clearInterval(idnr);
            show2 = false;
        }
        else{
            //16
            pos--;
            posb -= 0.977625;
            posttweetpos--;
             posttweet.style.left=posttweetpos +"%";
            tweetButton.style.left=posb +"%";
            tweet.style.left = pos +"%";
        }
    }
   }
     else if(show2==false)
     {
     var posb= 82.755;
    var posstpb = 98.397;
    var pos = 84.397;
    var posstp = 100.397;
           var posttweetposb = 85;
    var posttweetpos = 101;
    var idnr = setInterval(frame,14);
    function frame(){
        if(pos == posstp || posb==posstpb ){
            clearInterval(idnr);
            show2=true;
            tweet.setAttribute('hidden','hidden');
        }
        else{
            //16
            pos++;
            posb += 0.977625;
            posttweetpos++;
            posttweet.style.left=posttweetpos +"%";
            tweetButton.style.left=posb +"%";
            tweet.style.left = pos +"%";
        }
     }
    }

}


tweetButton.addEventListener('click', moving, false);

