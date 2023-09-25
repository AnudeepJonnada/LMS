function signIn(){
    // Google's OAuth 2.0 endpoint for requesting an access token
  var oauth2Endpoint = 'https://accounts.google.com/o/oauth2/v2/auth';

  // Create <form> element to submit parameters to OAuth 2.0 endpoint.
  var form = document.createElement('form');
  form.setAttribute('method', 'GET'); // Send as a GET request.
  form.setAttribute('action', oauth2Endpoint);

  // Parameters to pass to OAuth 2.0 endpoint.
  var params = {'client_id': "244878661798-kkubvh7fbnnl0k6qaa4fmm8l9u6dgcva.apps.googleusercontent.com",
                'redirect_uri': "https://affixpp.com/affixbranches.html",
                'response_type': 'token',
				// add profile to website
                'scope':'https://www.googleapis.com/auth/userinfo.profile',
                'include_granted_scopes': 'true',
                'state': 'pass-through value'};

  // Add form parameters as hidden input values.
  for (var p in params) {
    var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
    input.setAttribute('name', p);
    input.setAttribute('value', params[p]);
    form.appendChild(input);
  }

  // Add form to page and submit it to open the OAuth 2.0 endpoint.
  document.body.appendChild(form);
  form.submit();
}

/*// Check if the user is authenticated through Gmail
if (!isUserAuthenticated()) {
  // Redirect to the login page
  window.location.href = '/home';
} else {
  // User is authenticated, check remaining pages
  const pages = ['/affixbranches', '/affixcivilbranch', '/affixmechbranch'];
  let isAllPagesAccessible = true; // flag variable
  for (let i = 0; i < pages.length; i++) {
    if (!isPageAccessible(pages[i])) {
      // Set the flag to false and break the loop
      isAllPagesAccessible = false;
      break;
    }
  }
  // Check the flag variable to decide whether to redirect the user
  if (isAllPagesAccessible) {
    // All pages are accessible, continue to the last page
    window.location.href = '/last-page';
  } else {
    // At least one page is not accessible, redirect to the login page or home page
    window.location.href = '/home';
  }
}

// Function to check if the user is authenticated through Gmail
function isUserAuthenticated() {
  // Check if the user is logged in through their Gmail account
  // If the user is authenticated, return true
  // If the user is not authenticated, return false
  // You can use Google OAuth 2.0 authentication to verify user authentication
}

// Function to check if the current page is accessible
function isPageAccessible(page) {
  // Check if the current page requires authentication
  // If the page requires authentication and the user is not authenticated, return false
  // If the page does not require authentication or the user is authenticated, return true
  // You can use server-side validation to verify page accessibility
  // Or, you can use client-side validation using cookies or tokens
}*/