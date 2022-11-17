// Strings with some data
const domainStr = 'flgonzaga.github.io/web-ab-testing-variant-1'
const newDomain = 'flgonzaga.github.io/web-ab-testing-original'

// Make sure your string is regex friendly
// This will replace dots for '\'.
const regexUrl = /\./gm;    
const substr = `\\\.`;
const domain = domainStr.replace(regexUrl, substr);
// domain is a regex friendly string: 'my-domain\.com'
console.log('Regex expresion for domain', domain)

// HERE!!! You can 'assemble a complex regex using string pieces.
const re = new RegExp( String.raw `([\'|\"]https:\/\/)(${domain})(\S+[\'|\"])`, 'gm');

// now I'll use the regex expression groups to replace the domain
const domainSubst = `$1${newDomain}$3`;

// const page contains all the html text
const result = page.replace(re, domainSubst);

// Current URL: https://my-website.com/page_a
// const nextURL = 'https://flgonzaga.github.io/web-ab-testing-original/';
const nextTitle = 'Home Page - Variant 1';
const nextState = { additionalInformation: 'Updated the URL with JS' };

// This will create a new entry in the browser's history, without reloading
window.history.pushState(nextState, nextTitle, result);

// This will replace the current entry in the browser's history, without reloading
window.history.replaceState(nextState, nextTitle, result);