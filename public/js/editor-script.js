document.addEventListener("DOMContentLoaded", function () {
    const htmlCode = document.getElementById("html-code");
    const cssCode = document.getElementById("css-code");
    const jsCode = document.getElementById("js-code");
    const output = document.getElementById("editor-output");

    function run() {
        // localStorage.setItem("html_code", htmlCode.value);
        // localStorage.setItem("css_code", cssCode.value);
        // localStorage.setItem("js_code", jsCode.value);

        // const htmlContent = localStorage.getItem("html_code");
        // const cssContent = `<link href=" https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css " rel="stylesheet"> <style>${localStorage.getItem(
        //     "css_code"
        // )}</style>`;
        // const jsContent = `<script>(function(){${localStorage.getItem(
        //     "js_code"
        // )}})();</script>`;
        // const fullHtmlContent = `<!DOCTYPE html><html><head>${cssContent}</head><body>${htmlContent}${jsContent}</body></html>`;

        const htmlContent = htmlCode.value;
        const cssContent = `<link href=" https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css " rel="stylesheet"> <style>${cssCode.value}</style>`;
        const jsContent = `<script>(function(){${jsCode.value}})();</script>`;
        const fullHtmlContent = `<!DOCTYPE html><html><head>${cssContent}</head><body>${htmlContent}${jsContent}</body></html>`;

        // output.contentDocument.open();
        // output.contentDocument.write(cssContent + htmlContent + jsContent);
        // output.contentDocument.close();

        output.contentDocument.open();
        output.contentDocument.writeln(fullHtmlContent);
        output.contentDocument.close();
    }

    let timeoutId;

    htmlCode.addEventListener("keyup", waitOneSec);
    cssCode.addEventListener("keyup", waitOneSec);
    jsCode.addEventListener("keyup", waitOneSec);

    function waitOneSec() {
        // Clear any existing timeout
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // Set a new timeout to call the run function after 1 second
        timeoutId = setTimeout(run, 1000);
    }

    // Wait for the iframe to load before running the code
    output.onload = run;

    // Set textarea values from localStorage
    // htmlCode.value = localStorage.getItem("html_code");
    // cssCode.value = localStorage.getItem("css_code");
    // jsCode.value = localStorage.getItem("js_code");

    run(); // Run initially
});
