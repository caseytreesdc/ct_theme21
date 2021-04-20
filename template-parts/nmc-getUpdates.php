<!-- FORM: HEAD SECTION -->
<style>
.captcha {
    padding-bottom: 1em !important;
}

.wForm .captcha .oneField {
    margin: 0;
    padding: 0;
}
</style>
<script type="text/javascript">
var enableSubmitButton = function() {
    var submitButton = document.getElementById('submit_button');
    var explanation = document.getElementById('disabled-explanation');
    if (submitButton != null) {
        submitButton.removeAttribute('disabled');
        if (explanation != null) {
            explanation.style.display = 'none';
        }
    }
};
var disableSubmitButton = function() {
    var submitButton = document.getElementById('submit_button');
    var explanation = document.getElementById('disabled-explanation');
    if (submitButton != null) {
        submitButton.disabled = true;
        if (explanation != null) {
            explanation.style.display = 'block';
        }
    }
};
var onloadCallback = function() {
    grecaptcha.render('g-recaptcha-render-div', {
        'sitekey': '6LeISQ8UAAAAAL-Qe-lDcy4OIElnii__H_cEGV0C',
        'theme': 'light',
        'size': 'normal',
        'callback': 'enableSubmitButton',
        'expired-callback': 'disableSubmitButton'
    });
    var oldRecaptchaCheck = parseInt('0');
    if (oldRecaptchaCheck === -1) {
        var standardCaptcha = document.getElementById("tfa_captcha_text");
        standardCaptcha = standardCaptcha.parentNode.parentNode.parentNode;
        standardCaptcha.parentNode.removeChild(standardCaptcha);
    }
    document.getElementById("g-recaptcha-render-div").parentNode.parentNode.parentNode.style.display = "block";
    document.getElementById("g-recaptcha-render-div").parentNode.parentNode.parentNode.removeAttribute("hidden");
    document.getElementById("g-recaptcha-render-div").getAttributeNode('id').value = 'tfa_captcha_text';

    var captchaError = '';
    if (captchaError == '1') {
        var errMsgText = 'The CAPTCHA was not completed successfully.';
        var errMsgDiv = document.createElement('div');
        errMsgDiv.id = "tfa_captcha_text-E";
        errMsgDiv.className = "err errMsg";
        errMsgDiv.innerText = errMsgText;
        var loc = document.querySelector('.g-captcha-error');
        loc.insertBefore(errMsgDiv, loc.childNodes[0]);

        /* See wFORMS.behaviors.paging.applyTo for origin of this code */
        if (wFORMS.instances['paging']) {
            var b = wFORMS.instances['paging'][0];
            var pp = base2.DOM.Element.querySelector(document, wFORMS.behaviors.paging.CAPTCHA_ERROR);
            if (pp) {
                var lastPage = 1;
                for (var i = 1; i < 100; i++) {
                    if (b.behavior.isLastPageIndex(i)) {
                        lastPage = i;
                        break;
                    }
                }
                b.jumpTo(lastPage);
            }
        }
    }
};
</script>
<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    var warning = document.getElementById("javascript-warning");
    if (warning != null) {
        warning.parentNode.removeChild(warning);
    }
    var oldRecaptchaCheck = parseInt('0');
    if (oldRecaptchaCheck !== -1) {
        var explanation = document.getElementById('disabled-explanation');
        var submitButton = document.getElementById('submit_button');
        if (submitButton != null) {
            submitButton.disabled = true;
            if (explanation != null) {
                explanation.style.display = 'block';
            }
        }
    }
});
</script>
<link href="https://www.tfaforms.com/form-builder/4.4.0/css/wforms-layout.css?v=468" rel="stylesheet" type="text/css" />
<!--[if IE 8]>
    <link href="https://www.tfaforms.com/form-builder/4.4.0/css/wforms-layout-ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<!--[if IE 7]>
    <link href="https://www.tfaforms.com/form-builder/4.4.0/css/wforms-layout-ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<!--[if IE 6]>
    <link href="https://www.tfaforms.com/form-builder/4.4.0/css/wforms-layout-ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<!-- <link href="https://www.tfaforms.com/themes/get/default" rel="stylesheet" type="text/css" /> -->
<link href="https://www.tfaforms.com/form-builder/4.4.0/css/wforms-jsonly.css?v=468" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
<script type="text/javascript" src="https://www.tfaforms.com/wForms/3.10/js/wforms.js?v=468"></script>
<script type="text/javascript">
wFORMS.behaviors.prefill.skip = false;
</script>
<script type="text/javascript" src="https://www.tfaforms.com/wForms/3.10/js/localization-en_US.js?v=468"></script>
<!-- FORM: BODY SECTION -->
<div class="wFormContainer">
    <style type="text/css">
    #tfa_1,
    *[id^="tfa_1["] {
        width: 112px !important;
    }

    #tfa_1-D,
    *[id^="tfa_1["][class~="field-container-D"] {
        width: auto !important;
    }

    #tfa_1-L,
    label[id^="tfa_1["] {
        width: 91px !important;
        min-width: 0px;
    }

    #tfa_2,
    *[id^="tfa_2["] {
        width: 140px !important;
    }

    #tfa_2-D,
    *[id^="tfa_2["][class~="field-container-D"] {
        width: auto !important;
    }

    #tfa_2-L,
    label[id^="tfa_2["] {
        width: 91px !important;
        min-width: 0px;
    }

    #tfa_1873,
    *[id^="tfa_1873["] {
        width: 250px !important;
    }

    #tfa_1873-D,
    *[id^="tfa_1873["][class~="field-container-D"] {
        width: auto !important;
    }
    </style>
    <div class="">
        <div class="wForm" id="tfa_0-WRPR" dir="ltr">
            <div class="codesection" id="code-tfa_0"></div>
            <!-- <h3>Get Updates</h3> Moved out to Footer -->
            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="tfa_0">
                <div id="tfa_3" class="section inline group">
                    <div class="oneField field-container-D    " id="tfa_1-D">
                        <div class="inputWrapper">
                            <input type="text" id="tfa_1" name="tfa_1" value="" placeholder="First Name" aria-required="true" title="First Name" class="required">
                        </div>
                    </div>
                    <div class="oneField field-container-D    " id="tfa_2-D">
                        <div class="inputWrapper">
                            <input type="text" id="tfa_2" name="tfa_2" value="" placeholder="Last Name" aria-required="true" title="Last Name" class="required">
                        </div>
                    </div>
                    <div class="oneField field-container-D    " id="tfa_1873-D">
                        <div class="inputWrapper">
                            <input type="text" id="tfa_1873" name="tfa_1873" value="" placeholder="Email" aria-required="true" title="Email" class="validate-email required">
                        </div>
                    </div>
                </div>
                <div class="actions" id="tfa_0-A">
                    <div id="google-captcha" style="display: none">
                        <div class="captcha">
                            <div class="oneField">
                                <div class="g-recaptcha" id="g-recaptcha-render-div"></div>
                                <div class="g-captcha-error"></div>
                            </div>
                            <div id="disabled-explanation" class="captchaHelp" style="display: none">Complete the CAPTCHA to enable Submit</div>
                        </div>
                    </div>
                    <input type="submit" class="btn regular" id="submit_button" value="Submit">
                </div>
                <div style="clear:both"></div>
                <input type="hidden" value="4629992" name="tfa_dbFormId" id="tfa_dbFormId">
                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                <input type="hidden" value="8bb31a10b8ed086c2b62c3edc73f3121" name="tfa_dbControl" id="tfa_dbControl">
                <input type="hidden" value="2" name="tfa_dbVersionId" id="tfa_dbVersionId">
                <input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
            </form>
        </div>
    </div>
</div>