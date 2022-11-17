// const regex = '/variant-1/gm';

// Alternative syntax using RegExp constructor
const regex = new RegExp('variant-1', 'gm')

const str = 'https://flgonzaga.github.io/web-ab-testing-original/';
const subst = `original`;

// The substituted value will be contained in the result variable
const result = str.replace(regex, subst);
console.log('Substitution result: ', result);

// Current URL: https://my-website.com/page_a
const nextURL = 'https://flgonzaga.github.io/web-ab-testing-original/';
const nextTitle = 'Home Page - Variant 1';
const nextState = { additionalInformation: 'Updated the URL with JS' };

// This will create a new entry in the browser's history, without reloading
window.history.pushState(nextState, nextTitle, result);

// This will replace the current entry in the browser's history, without reloading
window.history.replaceState(nextState, nextTitle, result);