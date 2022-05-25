const cookie = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}


const currentlyStoredCookies = cookie;
const shouldAppearOnScreen = () => !cookie.getItem('jdc_consent');
const storeInformation = () => currentlyStoredCookies.setItem('jdc_consent', true);

window.onload = () =>{

    const acceptPrompt = event => {

        termsConsentPopUp.classList.add('hidden');
    }

    const termsConsentPopUp = document.getElementById('accept-terms-popup');
    const acceptButton      = document.getElementById('accept');
    acceptButton.addEventListener('click', acceptPrompt);

    if(shouldAppearOnScreen()) {

        setTimeout(() => {

            termsConsentPopUp.classList.remove('hidden');
        }, 2000);
    }
}