// Current URL: https://my-website.com/page_a
const nextURL = 'https://flgonzaga.github.io/web-ab-testing-original/';
const nextTitle = 'Home Page - Variant 1';
const nextState = { additionalInformation: 'Updated the URL with JS' };

// This will create a new entry in the browser's history, without reloading
window.history.pushState(nextState, nextTitle, nextURL);

// This will replace the current entry in the browser's history, without reloading
window.history.replaceState(nextState, nextTitle, nextURL);