
// Incrementing CacheVersion will kick off the install event and force
// previously cached resources to be updated from the network.
const CacheVersion = 1;
const CacheName = 'iDASLMS';
// Customize this with a different URL if needed.
// const OFFLINE_URL = 'offline.html';
const CacheResources = ["Offline"]

self.addEventListener('install', (installEvent) => {
  installEvent.waitUntil((async () => {
    const cache = await caches.open(CacheName);
    // Setting {cache: 'reload'} in the new request will ensure that the response
    // isn't fulfilled from the HTTP cache; i.e., it will be from the network.
    // await cache.addAll(new Request(CacheResources, {cache: 'reload'}));
    cache.addAll(CacheResources);
  })());
  // Force the waiting service worker to become the active service worker.
  self.skipWaiting();
});

self.addEventListener('activate', (activateEvent) => {
  activateEvent.waitUntil((async () => {
    // Enable navigation preload if it's supported.
    if ('navigationPreload' in self.registration) {
      await self.registration.navigationPreload.enable();
    }
  })());

  // Tell the active service worker to take control of the page immediately.
  self.clients.claim();
});

self.addEventListener('fetch', (fetchEvent) => {
  // We only want to call fetchEvent.respondWith() if this is a navigation request for an HTML page.
  if (fetchEvent.request.mode === 'navigate') {
    fetchEvent.respondWith((async () => {
      try {
        // First, try to use the navigation preload response if it's supported.
        const preloadResponse = await fetchEvent.preloadResponse;
        if (preloadResponse) {
          return preloadResponse;
        }

        // Always try the network first.
        const networkResponse = await fetch(fetchEvent.request);
        return networkResponse;
      } catch (error) {
        // catch is only triggered if an exception is thrown, which is likely due to a network error.
        // If fetch() returns a valid HTTP response with a response code in
        // the 4xx or 5xx range, the catch() will NOT be called.
        console.log('Fetch failed; returning offline page instead.', error);

        const cache = await caches.open(CacheName);
        const cachedResponse = await cache.match(CacheResources);
        return cachedResponse;
      }
    })());
  }

  // If our if() condition is false, then this fetch handler won't intercept the request.
  // If there are any other fetch handlers registered, they will get a chance to call fetchEvent.respondWith().
  // If no fetch handlers call fetchEvent.respondWith(), the request will be handled by
  // the browser as if there were no service worker involvement.
});
