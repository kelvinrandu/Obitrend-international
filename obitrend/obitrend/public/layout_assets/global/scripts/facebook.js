
(function (d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id))
    return;
js = d.createElement(s);
js.id = id;
js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=228449891236901";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function fb_share(dynamic_link,dynamic_title) {
var app_id = '228449891236901';
var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
var w = 600;
var h = 400;
var left = (screen.width / 2) - (w / 2);
var top = (screen.height / 2) - (h / 2);
window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
return false;
}
