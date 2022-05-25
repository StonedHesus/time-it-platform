const cookie = {

    // Getter method of the cookie object.
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },

    // Setter method of the cookie objects which binds an item's tag with its current value.
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}

/// TODO: Document the code properly.

// Instantiate a cookie object which represents the sessions currently stored cookies.
const currentlyStoredCookies = cookie;
// Keep track of whether the cookie should appear on the screen or not and whether we ought to store the information
// the user gave consent to or not.
const shouldAppearOnScreen = () => !cookie.getItem('jdc_consent');
const storeInformation = () => currentlyStoredCookies.setItem('jdc_consent', true);

window.onload = () =>{
    /**
     * @param event; onload this here method is activated everytime a new browser window or tab is instantiated/opened.
     *
     * This here method, which is a lambda expression intercepts the broadcast event onload and after receiving it
     * it determines whether or not the prompt should appear on screen or not, this is done by checking whether
     * the cookies are already present in the current session, if not then the user is prompted to accept once more
     * the terms of service and the cookie usage.
     */

    const acceptPrompt = event => {

        // If the prompt was accepted by the user then hide it from view.
        termsConsentPopUp.classList.add('hidden');
    }

    // Store a reference to the div containing the popup and the accept button.
    const termsConsentPopUp = document.getElementById('accept-terms-popup');
    const acceptButton      = document.getElementById('accept');
    // Add an event listener which listens for click events and upon intercepting them it calls the method acceptPrompt.
    acceptButton.addEventListener('click', acceptPrompt);

    if(shouldAppearOnScreen()) {

        // If the prompt should appear on screen then make it visible after a couple of seconds so as to assure that
        // all the static components such as images had been properly loaded first.

        setTimeout(() => {

            // Remove the hidden property after two seconds had passed.
            termsConsentPopUp.classList.remove('hidden');
        }, 2000);
    }
}