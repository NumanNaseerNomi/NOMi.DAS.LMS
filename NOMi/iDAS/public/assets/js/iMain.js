// NOMi - Prevents from closing when clicked inside - Start
function prevent()
{
  event.stopPropagation();
}
// NOMi - Prevents from closing when clicked inside - End

// NOMi - PWA Support - Start
if('serviceWorker' in navigator)
{
  navigator.serviceWorker.register('iDASServiceWorker.js')
    .then(reg => console.log('ServiceWorker registration successful with scope: ', reg.scope))
    .catch(err => console.log('ServiceWorker registration failed: ', err));
}
// NOMi - PWA Support - End
