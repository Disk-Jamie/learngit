// hrefIdCookie(["a_id","kid"]);
function hrefIdCookie(cookieStr){
    var cookieArr = hrefFn(cookieStr);
    //console.log(cookieArr);
    if( "a_id" in  cookieArr || "kid" in  cookieArr){
        cookieTimePush({"a_id":"","kid":""});
        cookieTimePush(cookieArr,24*60*60*60);
    }
}

function hrefCookie(cookieStr){
    var cookieArr = hrefFn(cookieStr);
    for(var obj in cookieArr){
        if(obj){
            //console.log(cookieArr);
            cookiePush(cookieArr);
        }
    }
}

function hrefFn(hrefStr){
    if(hrefStr){
        var url = window.location.href;
        var astore = {};
        if(url.indexOf("?")!=-1){
            url = url.split("?")[1].split("&");
            for(var i=0;i<url.length;i++){
                var arr = url[i].split("=");
                for(var y=0; y<hrefStr.length; y++){
                    if(arr[0] == hrefStr[y]){
                        astore[arr[0]] = arr[1];
                        break
                    }
                }
            }
        }
        return astore;
    }
}

function cookiePush(cookieStr){
    var expiresDate = new Date();
    expiresDate.setFullYear(expiresDate.getFullYear()+50)
    for(var obj in cookieStr){
        document.cookie = obj+"="+cookieStr[obj]+";path=/;expires="+expiresDate.toUTCString();
    }

}


/**
 * 判断是否cookie有变化或存在，不存在就存入，有则返回true
 * @param str
 * @returns {boolean}
 */
function cookieDateCheck(str){
    var oldCookieStr = cookieFind(str);
    var date = new Date();
    var todayStr = date.getFullYear()+""+date.getMonth()+""+date.getDate();
    return oldCookieStr&&(oldCookieStr ==  todayStr)?false:true;

}
/**
 * 存入今天日期的一个cookie
 * @param str
 */
function  cookieTadaypush(str){
    var date = new Date();
    var todayStr = date.getFullYear()+""+date.getMonth()+""+date.getDate();
    var json  = {};
    json[str] = todayStr;
    cookiePush( json );

}

/**
 *
 * @param cookieStr json对象
 * @param seconds   多少秒后过期
 */
function cookieTimePush(cookieStr,seconds){
    var secs = seconds ||  24*60*60, expiresDate = new Date().getTime()+ secs * 1000;
    for(var obj in cookieStr){
        //document.cookie = obj+"="+cookieStr[obj]+";path="+ path +";expires="+new Date(expiresDate).toUTCString();
        document.cookie=obj+ "=" +cookieStr[obj]+( (expiresDate==null) ? "" : ";expires=" + new Date(expiresDate).toUTCString() )+";path=/;domain=.koo.cn";
    }
}

function cookieFind(cookieStr){
    if(cookieStr){
        var astore;
        var cookieValue = document.cookie;
        var cookieArr = cookieValue.split(";");
        //console.log(cookieArr);
        for(var i=0; i<cookieArr.length; i++){
            var cookieArr2 = cookieArr[i].split("=");
            if(cookieArr2[0].replace(/[ ]/g,"") == cookieStr){
                astore = cookieArr2[1];
                break
            }
        }
        return astore;
    }
}













