function loadJSCode(url, DOMLocation = "body")
{
    var scriptTag = document.createElement('script');
    scriptTag.src = url;

    if(DOMLocation == "head")
    {
        document.head.appendChild(scriptTag);
    }
    else
    {
        document.body.appendChild(scriptTag);
    }
    
    // console.log("File Loaded in " + DOMLocation + ": " + url);
};

// console.log("iLoadJS Code File is Loaded");